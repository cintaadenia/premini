<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $table = "drinks";
    protected $fillable = [
        'drink'
    ];

    public static function rules($id = null)
    {
        return [
            'drink' => 'required|unique:drinks,drink,' . $id,
        ];
    }
}
