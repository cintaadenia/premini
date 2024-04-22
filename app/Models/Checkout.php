<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $table ="checkout";
    protected $guarded=[];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function order() {
        return $this->belongsTo(Order::class);
    }

    
}
