<?php

namespace App\Repositories;

use App\Models\ProductPrice;

class ProductPriceRepository extends BaseRepository
{
    function __construct(ProductPrice $model)
    {
        $this->model = $model;
    }
}
