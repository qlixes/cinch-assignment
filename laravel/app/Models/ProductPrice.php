<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $guarded = [];

    protected $hidden = ["created_at", "updated_at", "regions", "rental_periods", "products", "region_id", "rental_period_id", "product_id"];

    protected $appends = ['region_name', 'rental_period_name', 'product_name'];

    function regions()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    function rental_periods()
    {
        return $this->belongsTo(RentalPeriod::class, 'rental_period_id');
    }

    function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    function getRegionNameAttribute()
    {
        return $this->regions->name;
    }

    function getRentalPeriodNameAttribute()
    {
        return $this->rental_periods->name;
    }

    function getProductNameAttribute()
    {
        return $this->products->name;
    }
}
