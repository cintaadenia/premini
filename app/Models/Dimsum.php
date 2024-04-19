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
        'price',
        'stock',
        'image',
    ];

    public static function rules($id = null)
    {
        return [
            'dimsum' => 'required|unique:dimsum,dimsum,' . $id,
            'price' => 'required|numeric|min:1',
            'stock' => 'required|numeric|min:1',
            'image' => 'required|image|mimes:jpg,png,jpeg,svg',
        ];
    }
}
