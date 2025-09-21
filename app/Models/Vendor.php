<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vendor extends Model
{
    protected $fillable = ['name'];

    public function populars(): HasMany
    {
        return $this->hasMany(Popular::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'vendor_id', 'id');
    }
}
