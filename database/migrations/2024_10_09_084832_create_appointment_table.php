<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->integer('appointment_id', true);
            $table->integer('pet_id')->index('pet_id');
            $table->integer('vet_id')->index('vet_id');
            $table->dateTime('appointment_date');
            $table->enum('status', ['Pending', 'Confirmed', 'Cancelled', 'Completed'])->nullable()->default('Pending');
            $table->text('notes')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
