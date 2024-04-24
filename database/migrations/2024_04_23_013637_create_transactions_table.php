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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transactions_id');
            $table->string('user_id');
            $table->string('order_id');
            $table->string('reference');
            $table->string('urlSnap');
            $table->string('total');
            $table->enum('statusBayar',['PAID', 'UNPAID', 'CANCEL', 'EXPIRED']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
