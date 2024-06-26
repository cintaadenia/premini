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
            $table->integer('noTelepon');
            $table->foreignId('food_id')->constrained('food')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('levels_id')->constrained('levels')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('drinks_id')->constrained('drinks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('dimsums_id')->constrained('dimsums')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('users_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('catatan');
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
