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
        Schema::create('vaccination_schedule', function (Blueprint $table) {
            $table->integer('vaccination_schedule_id', true);
            $table->integer('pet_id')->index('pet_id');
            $table->string('vaccine_name', 100);
            $table->date('due_date');
            $table->enum('status', ['Pending', 'Completed'])->nullable()->default('Pending');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccination_schedule');
    }
};
