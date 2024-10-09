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
        Schema::create('payment', function (Blueprint $table) {
            $table->integer('payment_id', true);
            $table->integer('appointment_id')->index('appointment_id');
            $table->integer('user_id')->index('user_id');
            $table->decimal('amount', 10);
            $table->dateTime('payment_date')->nullable()->useCurrent();
            $table->enum('payment_status', ['Pending', 'Completed', 'Failed'])->nullable()->default('Pending');
            $table->string('payment_method', 50)->nullable()->default('Paypal');
            $table->timestamp('created_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
