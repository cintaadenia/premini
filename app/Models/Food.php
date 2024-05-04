<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = "food";
    protected $fillable = [
        'food',
        'level',
        'deskripsi',
        'price',
        'stock',
        'image',
    ];


    public static function rules($id = null)
    {
        return [
            'food' => 'required',
            'level' => 'required|string|max:255 ',
            'deskripsi' => 'required|string|max:255 ',
            'price' => 'required|numeric|min:1',
            'stock' => 'required|numeric|min:1',
            'image' => 'required|image|mimes:jpg,png,jpeg,svg',
        ];
    }
}
