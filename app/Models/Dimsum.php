<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dimsum extends Model
{
    use HasFactory;

    protected $table = "dimsums";
    protected $fillable = [
        'dimsum',
        'deskripsi',
        'price',
        'stock',
        'image',
    ];

    public static function rules($id = null)
    {
        return [
            'dimsum' => 'required',
            'deskripsi' => 'required|string|max:255 ',
            'price' => 'required|numeric|min:1',
            'stock' => 'required|numeric|min:1',
            'image' => 'required|image|mimes:jpg,png,jpeg,svg',
        ];
    }

    /**
     * Get all of the comments for the Dimsum
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderDimsums(): HasMany
    {
        return $this->hasMany(OrderDimsum::class);
    }
}
