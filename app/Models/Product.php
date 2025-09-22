<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'slug', 'image', 'banner', 'vendor_id'];

    public function populars(): HasMany
    {
        return $this->hasMany(Popular::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id')->withTimestamps();
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }

    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

    public function bundles()
    {
        return $this->hasMany(Bundle::class);
    }
}
