<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dimsum extends Model
{
    use HasFactory;

    protected $table = "dimsums";
    protected $fillable = [
        'dimsum',
        'deskripsi',
        'price',
        'stock',
        'image',
    ];

}
