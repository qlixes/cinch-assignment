<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Services\ProductPriceService;
use App\Services\ProductService;
use App\Services\RegionService;
use App\Services\RentalPeriodService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssignmentController extends Controller
{
    function __construct(
        ProductService $product,
        ProductPriceService $product_price,
        RegionService $region,
        RentalPeriodService $rental_period
    ) {
        $this->product = $product;
        $this->product_price = $product_price;
        $this->region = $region;
        $this->rental_period = $rental_period;
    }

    function products(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'region'    => 'nullable|string',
            'period'    => 'nullable|string',
        ]);

        if ($validate->fails()) {
            return response()->json("Missing Parameter !", 422);
        }

        if ($request->filled('region')) {
            $region = $this->region->showRegionId($request->region);

            $request->request->add([
                'region_id' => $region->id,
            ]);
        }

        if ($request->filled('period')) {
            $rental = $this->rental_period->showRentalPeriodId($request->period);

            $request->request->add([
                'rental_period_id' => $rental->id,
            ]);
        }

        $response = $this->product->showProductDetails($request);

        return new ProductResource($response);
    }

    // pagination attribute
    function product_attribute_values(Request $request)
    {
        $response = $this->product->showProductAttributes();

        return new ProductResource($response);
    }

    // paginate rental_period
    function product_region_prices(Request $request)
    {
        $response = $this->product->showProductRegionPrices();

        return new ProductResource($response);
    }

    function region_product_price(Request $request)
    {
        $response = $this->region->showRegionProductPrices();

        return new ProductResource($response);
    }

    function period_product_price(Request $request)
    {
        $response = $this->rental_period->showRentalPeriodProductPrice();

        return new ProductResource($response);
    }
}
