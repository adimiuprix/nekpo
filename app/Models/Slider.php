<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Slider extends Model
{
    protected $fillable = ['title', 'product_id', 'image', 'is_active'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
