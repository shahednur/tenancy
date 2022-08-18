<?php

namespace App\Traits;
use App\Models\Store;

trait BelongToStore
{
    public function stores()
    {
        return $this->belongsTo(Store::class);
    }

    public static function bootBelongToStore()
    {
        static::addGlobalScope('stores', function ($query) {
            $store = app()->make('store.active');
            $query->where('store_id', $store->id);
        });
    }
}