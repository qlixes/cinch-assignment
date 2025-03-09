<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use App\Http\Resources\ProductResource;
use App\Models\Attribute;
use App\Models\Product;
use App\Services\ProductPriceService;
use App\Services\ProductService;
use App\Services\RegionService;
use App\Services\RentalPeriodService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssignmentController extends Controller
{
    use ResponseTrait;

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

    function test(ProductFormRequest $request)
    {
        $result = $this->product->showProductTest();

        return response()->json($result, 200);
    }

    function products(ProductFormRequest $request)
    {
        if ($request->filled('region')) {
            $region = $this->region->showRegionId($request->region);

            if (!$region) {
                return $this->setMessage("Invalid region")->setError(401);
            }

            $request->request->add([
                'region_id' => $region->id,
            ]);
        }

        if ($request->filled('period')) {
            $rental = $this->rental_period->showRentalPeriodId($request->period);

            if (!$rental) {
                return $this->setMessage("Invalid rental")->setError(401);
            }

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
