<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\BelongToStore;

class Category extends Model
{
    use HasFactory, BelongToStore;

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
