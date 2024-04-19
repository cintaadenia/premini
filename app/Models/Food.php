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
        'price',
        'stock',
        'image',
    ];


    public static function rules($id = null)
    {
        return [
            'food' => 'required|unique:food,food,' . $id,
            'price' => 'required|numeric|min:1000',
            'stock' => 'required|numeric|min:1',
            'image' => 'required|image|mimes:jpg,png,jpeg,svg',
        ];
    }
}
