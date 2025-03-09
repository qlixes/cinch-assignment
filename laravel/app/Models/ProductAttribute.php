<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $guarded = [];

    protected $hidden = ["created_at", "updated_at"];

    function attributes()
    {
        $this->belongsTo(Attribute::class);
    }

    function attribute_values()
    {
        return $this->belongsTo(AttributeValue::class);
    }

    function products()
    {
        return $this->belongsTo(Product::class);
    }
}
