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
        Schema::table('medical_record', function (Blueprint $table) {
            $table->foreign(['pet_id'], 'medical_record_ibfk_1')->references(['pet_id'])->on('pet')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['vet_id'], 'medical_record_ibfk_2')->references(['vet_id'])->on('vet')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medical_record', function (Blueprint $table) {
            $table->dropForeign('medical_record_ibfk_1');
            $table->dropForeign('medical_record_ibfk_2');
        });
    }
};
