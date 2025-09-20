<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vendor extends Model
{
    public function populars(): HasMany
    {
        return $this->hasMany(Popular::class);
    }
}
