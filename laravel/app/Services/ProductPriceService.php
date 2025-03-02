<?php

namespace App\Services;

use App\Repositories\ProductPriceRepository;

final class ProductPriceService extends BaseService
{
    function __construct(ProductPriceRepository $repository)
    {
        $this->repository = $repository;
    }
}
