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
        Schema::table('user_user_type', function (Blueprint $table) {
            $table->foreign(['user_id'], 'user_user_type_ibfk_1')->references(['user_id'])->on('user')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['user_type_id'], 'user_user_type_ibfk_2')->references(['user_type_id'])->on('user_type')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_user_type', function (Blueprint $table) {
            $table->dropForeign('user_user_type_ibfk_1');
            $table->dropForeign('user_user_type_ibfk_2');
        });
    }
};
