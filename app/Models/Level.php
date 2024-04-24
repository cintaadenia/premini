<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = "levels";
    protected $fillable = [
        'level'
    ];

    public static function rules($id = null)
    {
        return [
            'level' => 'required|unique:food,food,' . $id,
        ];
    }
}
