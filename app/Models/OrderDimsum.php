<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDimsum extends Model
{
    use HasFactory;

    protected $table = "order_dimsums";
    protected $fillable = [
        'dimsum_id',
        'order_id',
        'jumlah',
    ];

    /**
     * Get the dimsum that owns the OrderDimsum
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dimsum(): BelongsTo
    {
        return $this->belongsTo(Dimsum::class);
    }

}
