<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = "food";
    protected $fillable = [
        'food'
    ];


    public static function rules($id = null)
    {
        return [
            'food' => 'required|unique:food,food,' . $id,
        ];
    }
}
