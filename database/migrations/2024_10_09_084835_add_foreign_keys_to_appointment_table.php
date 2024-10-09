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
        Schema::table('appointment', function (Blueprint $table) {
            $table->foreign(['pet_id'], 'appointment_ibfk_1')->references(['pet_id'])->on('pet')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['vet_id'], 'appointment_ibfk_2')->references(['vet_id'])->on('vet')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointment', function (Blueprint $table) {
            $table->dropForeign('appointment_ibfk_1');
            $table->dropForeign('appointment_ibfk_2');
        });
    }
};
