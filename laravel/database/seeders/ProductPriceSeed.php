<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPriceSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_prices')->insert([
            ['region_id' => 1, 'rental_period_id' => 1, 'product_id' => 1, 'price' => 1000.00],
            ['region_id' => 1, 'rental_period_id' => 2, 'product_id' => 1, 'price' => 2700.00],
            ['region_id' => 1, 'rental_period_id' => 3, 'product_id' => 1, 'price' => 5400.00],
            ['region_id' => 2, 'rental_period_id' => 1, 'product_id' => 1, 'price' => 1100.00],
            ['region_id' => 2, 'rental_period_id' => 2, 'product_id' => 1, 'price' => 3000.00],
            ['region_id' => 2, 'rental_period_id' => 3, 'product_id' => 1, 'price' => 8700.00],
            ['region_id' => 1, 'rental_period_id' => 1, 'product_id' => 2, 'price' => 1000.00],
            ['region_id' => 1, 'rental_period_id' => 2, 'product_id' => 2, 'price' => 2700.00],
            ['region_id' => 1, 'rental_period_id' => 3, 'product_id' => 2, 'price' => 5400.00],
            ['region_id' => 2, 'rental_period_id' => 1, 'product_id' => 2, 'price' => 1100.00],
            ['region_id' => 2, 'rental_period_id' => 2, 'product_id' => 2, 'price' => 3000.00],
            ['region_id' => 2, 'rental_period_id' => 3, 'product_id' => 2, 'price' => 8700.00],
            ['region_id' => 1, 'rental_period_id' => 1, 'product_id' => 3, 'price' => 1000.00],
            ['region_id' => 1, 'rental_period_id' => 2, 'product_id' => 3, 'price' => 2700.00],
            ['region_id' => 1, 'rental_period_id' => 3, 'product_id' => 3, 'price' => 5400.00],
            ['region_id' => 2, 'rental_period_id' => 1, 'product_id' => 3, 'price' => 1100.00],
            ['region_id' => 2, 'rental_period_id' => 2, 'product_id' => 3, 'price' => 3000.00],
            ['region_id' => 2, 'rental_period_id' => 3, 'product_id' => 3, 'price' => 8700.00],
        ]);
    }
}
