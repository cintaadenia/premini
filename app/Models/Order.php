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
    public function food()
    {
        return $this->belongsTo(Food::class);
    }
    public function levels()
    {
        return $this->belongsTo(Level::class);
    }
    public function drinks()
    {
        return $this->belongsTo(Drink::class);
    }
    public function dimsums()
    {
        return $this->belongsTo(Dimsum::class);
    }

}
