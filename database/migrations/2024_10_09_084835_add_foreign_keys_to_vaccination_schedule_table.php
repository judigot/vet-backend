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
        Schema::table('vaccination_schedule', function (Blueprint $table) {
            $table->foreign(['pet_id'], 'vaccination_schedule_ibfk_1')->references(['pet_id'])->on('pet')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vaccination_schedule', function (Blueprint $table) {
            $table->dropForeign('vaccination_schedule_ibfk_1');
        });
    }
};
