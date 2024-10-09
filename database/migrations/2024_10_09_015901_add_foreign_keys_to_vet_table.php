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
        Schema::table('vet', function (Blueprint $table) {
            $table->foreign(['clinic_id'], 'vet_ibfk_1')->references(['clinic_id'])->on('clinic')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vet', function (Blueprint $table) {
            $table->dropForeign('vet_ibfk_1');
        });
    }
};
