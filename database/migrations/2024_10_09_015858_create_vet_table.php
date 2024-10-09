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
        Schema::create('vet', function (Blueprint $table) {
            $table->integer('vet_id', true);
            $table->integer('clinic_id')->index('clinic_id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('specialty', 100)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('email', 100)->nullable()->unique('email');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vet');
    }
};
