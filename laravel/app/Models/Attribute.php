<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];

    function products()
    {
        return $this->belongsToMany(Product::class, 'product_attributes', 'attribute_id', 'product_id');
    }

    function attribute_values()
    {
        return $this->belongsToMany(AttributeValue::class, 'product_attributes', 'attribute_id', 'attribute_value_id');
    }
}
