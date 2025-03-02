<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $guarded = [];

    protected $hidden = ["created_at", "updated_at", "attribute_color", "attribute_size", "product_id", "color_id", "size_id"];

    protected $appends = ['color', 'size'];

    function attribute_color()
    {
        return $this->belongsTo(AttributeValue::class, 'color_id');
    }

    function attribute_size()
    {
        return $this->belongsTo(AttributeValue::class, 'size_id');
    }

    function getColorAttribute()
    {
        return $this->attribute_color->value;
    }

    function getSizeAttribute()
    {
        return $this->attribute_size->value;
    }
}
