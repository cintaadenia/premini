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
    Schema::create('spending', function (Blueprint $table) {
        $table->id();
        // $table->unsignedBigInteger('food_id');
        // $table->unsignedBigInteger('drinks_id');
        // $table->unsignedBigInteger('dimsums_id');
        $table->foreign('food_id')->references('id')->on('food')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('drinks_id')->references('id')->on('drinks')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('dimsums_id')->references('id')->on('dimsums')->onDelete('cascade')->onUpdate('cascade');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spending');
    }
};
