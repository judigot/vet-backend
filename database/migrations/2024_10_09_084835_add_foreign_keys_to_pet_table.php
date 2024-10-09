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
        Schema::table('pet', function (Blueprint $table) {
            $table->foreign(['user_id'], 'pet_ibfk_1')->references(['user_id'])->on('user')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pet', function (Blueprint $table) {
            $table->dropForeign('pet_ibfk_1');
        });
    }
};
