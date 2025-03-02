<?php

namespace App\Repositories;

use App\Models\Region;

class RegionRepository extends BaseRepository
{
    function __construct(Region $model)
    {
        $this->model = $model;
    }

    function showRegionProductPrices()
    {
        return $this->model->with('product_prices')->paginate();
    }

    function findRegionId(string $name)
    {
        return $this->model->where('name', $name)->first();
    }
}
