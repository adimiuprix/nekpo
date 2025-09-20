<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Popular extends Model
{
    protected $fillable = ['product_id', 'vendor_id'];

    public function product() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function vendor() :BelongsTo
    {
        return $this->belongsTo(Vendor::class);
    }
}
