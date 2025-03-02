<?php

namespace App\Http\Controllers;

use App\Services\ProductPriceService;
use App\Services\ProductService;
use App\Services\RegionService;
use App\Services\RentalPeriodService;

abstract class Controller
{
    protected ProductService $product;
    protected ProductPriceService $product_price;
    protected RegionService $region;
    protected RentalPeriodService $rental_period;
}
