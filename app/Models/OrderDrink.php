<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDrink extends Model
{
    use HasFactory;

    protected $table = "order_drinks";
    protected $fillable = [
        'drink_id',
        'order_id',
        'jumlah',
    ];


    /**
     * Get the food that owns the OrderFood
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function drinks(): BelongsTo
    {
        return $this->belongsTo(Drink::class,'drink_id');
    }
}
