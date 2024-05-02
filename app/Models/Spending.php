<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
    use HasFactory;

    protected $table = "spending";
    protected $guarded = ['id'];

    public function foods()
    {
        return $this->belongsTo(Food::class);
    }
    // public function levels()
    // {
    //     return $this->belongsTo(Level::class);
    // }
    public function drinks()
    {
        return $this->belongsTo(Drink::class);
    }
    public function dimsums()
    {
        return $this->belongsTo(Dimsum::class);
    }

}
