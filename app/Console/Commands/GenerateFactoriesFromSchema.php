<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GenerateFactoriesFromSchema extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:factories-from-schema';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate factories based on database schema';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Set your database name
        $databaseName = env('DB_DATABASE'); // Get database name from .env

        // Define tables to ignore
        $ignoredTables = [
            "migrations",
            "failed_jobs",
            "password_resets",
            "password_reset_tokens",
            "cache_locks",
            "personal_access_tokens",
            "cache",
            "jobs",
            "job_batches",
            "sessions",
            "oauth_access_tokens",
            "oauth_auth_codes",
            "oauth_clients",
            "oauth_personal_access_clients",
            "oauth_refresh_tokens",
            "telescope_entries",
            "telescope_entries_tags",
            "telescope_monitoring",
            "horizon_jobs",
            "horizon_monitoring",
            "horizon_supervisor_commands",
            "horizon_tags"
        ];

        // Run the introspection query to fetch the schema data
        $schemaData = DB::select("
            SELECT c.TABLE_NAME AS table_name, JSON_OBJECT(
                'columns', JSON_ARRAYAGG(
                    JSON_OBJECT(
                        'column_name', c.COLUMN_NAME,
                        'data_type', c.DATA_TYPE,
                        'is_nullable', c.IS_NULLABLE,
                        'column_default', IFNULL(c.COLUMN_DEFAULT, NULL),
                        'primary_key', c.COLUMN_KEY = 'PRI',
                        'unique', c.COLUMN_KEY = 'UNI',
                        'foreign_key', CASE WHEN k.REFERENCED_TABLE_NAME IS NOT NULL 
                            THEN JSON_OBJECT(
                                'foreign_table_name', k.REFERENCED_TABLE_NAME,
                                'foreign_column_name', k.REFERENCED_COLUMN_NAME
                            )
                            ELSE NULL
                        END
                    )
                )
            ) AS table_definition
            FROM INFORMATION_SCHEMA.COLUMNS c
            LEFT JOIN INFORMATION_SCHEMA.KEY_COLUMN_USAGE k
                ON c.TABLE_SCHEMA = k.TABLE_SCHEMA
                AND c.TABLE_NAME = k.TABLE_NAME
                AND c.COLUMN_NAME = k.COLUMN_NAME
                AND k.REFERENCED_TABLE_NAME IS NOT NULL
            WHERE c.TABLE_SCHEMA = '{$databaseName}'
            GROUP BY c.TABLE_NAME
        ");

        // Loop through the tables and generate factories
        foreach ($schemaData as $table) {
            if (!property_exists($table, 'table_name')) {
                $this->warn('Skipping entry without table_name');
                continue; // Skip entries without table_name
            }

            $tableName = $table->table_name;

            // Skip tables that are in the ignored tables list
            if (in_array($tableName, $ignoredTables)) {
                $this->info("Skipping table {$tableName} as it's in the ignored list");
                continue; // Skip this table and move to the next one
            }

            $columns = json_decode($table->table_definition)->columns;

            $factoryContent = $this->generateFactoryContent($tableName, $columns);

            // Write the factory content to a file
            $factoryFileName = Str::studly($tableName) . 'Factory.php';
            File::put(database_path("factories/{$factoryFileName}"), $factoryContent);

            $this->info("Factory created for {$tableName}");
        }

        $this->info('Factory generation completed.');
    }

    /**
     * Generate factory content based on the table schema.
     */
    protected function generateFactoryContent($tableName, $columns)
    {
        $modelName = Str::studly(Str::singular($tableName));

        // Define special fields with custom generation rules using fake() syntax
        $specialFields = [
            'email' => "\$this->faker->unique()->safeEmail()",
            'password_hash' => "Hash::make('password')",
            'phone_number' => "\$this->faker->phoneNumber()",
            'first_name' => "\$this->faker->firstName()",
            'last_name' => "\$this->faker->lastName()",
            'full_name' => "\$this->faker->name()",
            'username' => "\$this->faker->unique()->userName()",
            'profile_picture' => "\$this->faker->imageUrl(640, 480)",
            'created_at' => "\$this->faker->dateTime()",
            'updated_at' => "\$this->faker->dateTime()",
        ];

        $fields = '';

        foreach ($columns as $column) {
            // Skip primary key, timestamps, and special Laravel fields
            if (in_array($column->column_name, ['id', 'user_id', 'created_at', 'updated_at', 'deleted_at'])) {
                continue;
            }

            // Handle foreign keys automatically
            if ($column->foreign_key) {
                $relatedModel = Str::studly(Str::singular($column->foreign_key->foreign_table_name));
                $fields .= "            '{$column->column_name}' => {$relatedModel}::factory(),\n";
                continue;
            }

            // Check if the column has a special rule
            if (array_key_exists($column->column_name, $specialFields)) {
                $fields .= "            '{$column->column_name}' => {$specialFields[$column->column_name]},\n";
                continue;
            }

            // Handle nullable fields by wrapping with optional()
            $optionalPrefix = ($column->is_nullable === 'YES') ? '$this->faker->optional()->' : '$this->faker->';

            // Default field generation based on data type using fake()
            $columnType = $column->data_type;
            switch ($columnType) {
                case 'varchar':
                case 'text':
                case 'char':
                    $fields .= "            '{$column->column_name}' => {$optionalPrefix}word(),\n";
                    break;
                case 'int':
                case 'bigint':
                    $fields .= "            '{$column->column_name}' => {$optionalPrefix}randomNumber(),\n";
                    break;
                case 'decimal':
                case 'float':
                    $fields .= "            '{$column->column_name}' => {$optionalPrefix}randomFloat(2, 0, 1000),\n";
                    break;
                case 'datetime':
                case 'timestamp':
                case 'date':
                    $fields .= "            '{$column->column_name}' => {$optionalPrefix}dateTime(),\n";
                    break;
                case 'boolean':
                    $fields .= "            '{$column->column_name}' => {$optionalPrefix}boolean(),\n";
                    break;
                default:
                    $fields .= "            '{$column->column_name}' => {$optionalPrefix}word(),\n";
                    break;
            }
        }

        // Remove trailing comma from the last field
        $fields = rtrim($fields, ",\n");

        // Add static password if needed
        $passwordSection = '';
        if (in_array('password_hash', array_column($columns, 'column_name'))) {
            $passwordSection = <<<EOD
    /**
     * The current password being used by the factory.
     */
    protected static ?string \$password;

EOD;
        }

        return <<<EOD
<?php

namespace Database\Factories;

use App\Models\\{$modelName};
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class {$modelName}Factory extends Factory
{
    {$passwordSection}

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
{$fields}
        ];
    }
}
EOD;
    }
}
