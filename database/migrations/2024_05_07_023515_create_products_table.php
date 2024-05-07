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
        // Mendefinisikan skema untuk membuat tabel 'products'
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Kolom id yang otomatis bertambah
            $table->string("name")->nullable(); // Kolom untuk nama produk, dapat bernilai null
            $table->longtext("description")->nullable(); // Kolom untuk deskripsi produk, dapat bernilai null
            $table->integer("price"); // Kolom untuk harga produk
            $table->timestamps(); // Kolom untuk penanda waktu pembuatan dan pembaruan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'products' jika sudah ada
        Schema::dropIfExists('products');
    }
};
