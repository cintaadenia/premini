<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDrink extends Model
{
    use HasFactory;

    protected $table = "order_drinks";
    protected $fillable = [
        'drink_id',
        'order_id',
        'jumlah',
    ];
}
