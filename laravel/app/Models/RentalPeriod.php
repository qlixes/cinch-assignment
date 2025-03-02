<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalPeriod extends Model
{
    protected $guarded = [];

    protected $hidden = ["created_at", "updated_at"];

    protected $appends = ['pricelist'];

    function product_prices()
    {
        return $this->hasMany(ProductPrice::class, 'rental_period_id');
    }

    function getPricelistAttribute()
    {
        return $this->product_prices->map(function ($item) {
            return $item->only('id', 'price', 'region_name', 'product_name');
        });
    }
}
