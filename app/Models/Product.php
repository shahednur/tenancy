<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\BelongToStore;

class Product extends Model
{
    use HasFactory, BelongToStore;

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
