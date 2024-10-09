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
        Schema::table('photo', function (Blueprint $table) {
            $table->foreign(['pet_id'], 'photo_ibfk_1')->references(['pet_id'])->on('pet')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['user_id'], 'photo_ibfk_2')->references(['user_id'])->on('user')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('photo', function (Blueprint $table) {
            $table->dropForeign('photo_ibfk_1');
            $table->dropForeign('photo_ibfk_2');
        });
    }
};
