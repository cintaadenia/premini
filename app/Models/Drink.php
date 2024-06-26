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

    public static function rules($id = null)
    {
        return [
            'drink' => 'required',
            'deskripsi' => 'required|string|max:255 ',
            'price' => 'required|numeric|min:1',
            'stock' => 'required|numeric|min:1',
            'image' => 'required|image|mimes:jpg,png,jpeg,svg',
        ];
    }
}
