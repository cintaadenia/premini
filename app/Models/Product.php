<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Menggunakan HasFactory trait untuk memfasilitasi pembuatan objek menggunakan factory
    use HasFactory;

    // Mendefinisikan kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'name',         // Nama produk
        'description',  // Deskripsi produk
        'price'         // Harga produk
    ];
}

