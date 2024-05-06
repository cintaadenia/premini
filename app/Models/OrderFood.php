<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderFood extends Model
{
    use HasFactory;

    protected $table = "order_food";
    protected $fillable = [
        'food_id',
        'order_id',
        'jumlah',
    ];


    /**
     * Get the food that owns the OrderFood
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function food(): BelongsTo
    {
        return $this->belongsTo(Food::class,'food_id');
    }
}

