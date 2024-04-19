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
        'price',
        'stock',
        'image',
    ];

    public static function rules($id = null)
    {
        return [
            'drink' => 'required|unique:drink,drink,' . $id,
            'price' => 'required|numeric|min:1',
            'stock' => 'required|numeric|min:1',
            'image' => 'required|image|mimes:jpg,png,jpeg,svg',
        ];
    }
}
