<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $guarded = [];

    protected $hidden = ["created_at", "updated_at"];

    protected $appends = ['pricelist'];

    function product_prices()
    {
        return $this->hasMany(ProductPrice::class, 'region_id');
    }

    function getPricelistAttribute()
    {
        return $this->product_prices->map(function ($item) {
            return $item->only('id', 'price', 'rental_period_name', 'product_name');
        });
    }
}
