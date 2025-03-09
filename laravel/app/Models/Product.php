<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class Product extends Model
{
    protected $guarded = [];

    protected $hidden = ["created_at", "updated_at"];

    function product_prices()
    {
        return $this->hasMany(ProductPrice::class);
    }

    function getRentalPriceAttribute()
    {
        return $this->product_prices->map(function ($item) {
            return $item->only('region_name', 'rental_period_name', 'price');
        });
    }
}
