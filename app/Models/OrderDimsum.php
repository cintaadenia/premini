<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDimsum extends Model
{
    use HasFactory;

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
