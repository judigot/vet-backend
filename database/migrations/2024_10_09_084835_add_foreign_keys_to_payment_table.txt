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
        Schema::table('payment', function (Blueprint $table) {
            $table->foreign(['appointment_id'], 'payment_ibfk_1')->references(['appointment_id'])->on('appointment')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['user_id'], 'payment_ibfk_2')->references(['user_id'])->on('user')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payment', function (Blueprint $table) {
            $table->dropForeign('payment_ibfk_1');
            $table->dropForeign('payment_ibfk_2');
        });
    }
};
