<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $hidden = ["created_at", "updated_at"];

    function product_attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    function product_prices()
    {
        return $this->hasMany(ProductPrice::class);
    }

    function getVariantAttribute()
    {
        return $this->product_attributes->map(function ($item) {
            return $item->only('color', 'size');
        });
    }

    function getRentalPriceAttribute()
    {
        return $this->product_prices->map(function ($item) {
            return $item->only('region_name', 'rental_period_name', 'price');
        });
    }
}
