<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['sku' => 'A2178', 'name' => 'Macbook Pro i5', 'description' => 'Macbook Pro'],
            ['sku' => 'A2289', 'name' => 'Macbook Pro i7', 'description' => 'Macbook Pro'],
            ['sku' => 'A2338', 'name' => 'Macbook Pro M1', 'description' => 'Macbook Pro'],
            ['sku' => 'A2779', 'name' => 'Macbook Pro M2', 'description' => 'Macbook Pro'],
        ]);
    }
}
