<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $table = "drinks";
    protected $fillable = [
        'drink',
        'deskripsi',
        'price',
        'stock',
        'image',
    ];

}
