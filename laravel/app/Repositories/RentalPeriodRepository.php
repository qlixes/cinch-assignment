<?php

namespace App\Repositories;

use App\Models\RentalPeriod;

class RentalPeriodRepository extends BaseRepository
{
    function __construct(RentalPeriod $model)
    {
        $this->model = $model;
    }

    function showRentalPeriodProductPrice()
    {
        return $this->model->with('product_prices')->paginate();
    }

    function findPeriodId(string $name)
    {
        return $this->model->where('name', $name)->first();
    }
}
