<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

  
    public function checkout()
    {
        return $this->belongsTo(Checkout::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
