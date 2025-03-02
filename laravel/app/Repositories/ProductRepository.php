<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository
{
    function __construct(Product $model)
    {
        $this->model = $model;
    }

    function full_details(int $region_id = null, int $period_id = null)
    {
        $product = $this->model->with('product_attributes', 'product_prices');

        if (isset($region_id)) {
            $product = $product->with(['product_prices' => function ($item) use ($region_id) {
                $item->where('region_id', $region_id);
            }]);
        }

        if (isset($period_id)) {
            $product = $product->with(['product_prices' => function ($item) use ($period_id) {
                $item->where('rental_period_id', $period_id);
            }]);
        }

        return $product->paginate();
    }

    function product_attribute_values()
    {
        return $this->model->with('product_attributes')->paginate();
    }

    function product_rental_periods()
    {
        return $this->model->with('product_prices')->paginate();
    }
}
