<?php

use App\Http\Controllers\AssignmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {*/
/*    return $request->user();*/
/*})->middleware('auth:sanctum');*/

Route::post("/products", [AssignmentController::class, 'products'])->name('products');
Route::post("/product_attributes", [AssignmentController::class, 'product_attribute_values'])->name('product_attributes');
Route::post("/product_prices", [AssignmentController::class, 'product_region_prices'])->name('product_prices');

Route::post("/region_product_price", [AssignmentController::class, 'region_product_price'])->name('region_price');
Route::post("/period_product_price", [AssignmentController::class, 'period_product_price'])->name('period_price');
