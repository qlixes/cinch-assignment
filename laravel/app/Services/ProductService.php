<?php

namespace App\Services;

use App\Repositories\ProductRepository;

final class ProductService extends BaseService
{
    function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    function showProductTest()
    {
        return $this->repository->test();
    }

    function showProductDetails($request)
    {
        return $this->repository->full_details($request->region_id, $request->rental_period_id);
    }

    function showProductAttributes()
    {
        return $this->repository->product_attribute_values();
    }

    function showProductRegionPrices()
    {
        return $this->repository->product_rental_periods();
    }
}
