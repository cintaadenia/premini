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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('food_id')->constrained('order_food')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('dimsum_id')->constrained('order_dimsums')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('drink_id')->constrained('order_drinks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('catatan')->nullable();
            $table->enum('status',['UNPAID', 'COOK', 'DELIVER', 'RECEIVED'])->default('UNPAID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

