<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";
    protected $fillable = [
        'noTelepon',
        'makanan',
        'level',
        'minuman',
        'dimsum',
        'catatan',

    ];


    // public static function rules($id = null)
    // {
    //     return [
    //         'noTelepon' => 'required|numeric|min:11'. $id,
    //         'makanan' => 'required|string|min:1',
    //         'level' => 'required|string|min:1',
    //         'minuman' => 'required|string|min:1',
    //         'dimsum' => 'required|string|min:1',
    //         'catatan' => 'required|string|min:1',

    //     ];
    // }
}
