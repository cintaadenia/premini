<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";
    protected $guarded = ['id'];

    public function checkout()
    {
        return $this->belongsTo(Checkout::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function foods()
    {
        return $this->hasMany(OrderFood::class,  'food_id', 'id');
    }

    public function drinks()
    {
        return $this->hasMany(OrderDrink::class, 'drink_id', 'id');
    }
    
    public function dimsums()
    {
        return $this->hasMany(OrderDimsum::class, 'dimsum_id', 'id');
    }

}
