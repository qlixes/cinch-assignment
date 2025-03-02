<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAttributeSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_attributes')->insert([
            ['product_id' => 1, 'color_id' => 1, 'size_id' => 4],
            ['product_id' => 1, 'color_id' => 2, 'size_id' => 4],
            ['product_id' => 2, 'color_id' => 2, 'size_id' => 4],
            ['product_id' => 2, 'color_id' => 2, 'size_id' => 6],
            ['product_id' => 3, 'color_id' => 1, 'size_id' => 4],
            ['product_id' => 3, 'color_id' => 2, 'size_id' => 4],
            ['product_id' => 3, 'color_id' => 3, 'size_id' => 4],
            ['product_id' => 3, 'color_id' => 1, 'size_id' => 5],
            ['product_id' => 3, 'color_id' => 2, 'size_id' => 5],
            ['product_id' => 3, 'color_id' => 3, 'size_id' => 5],
            ['product_id' => 3, 'color_id' => 1, 'size_id' => 7],
            ['product_id' => 3, 'color_id' => 2, 'size_id' => 7],
            ['product_id' => 3, 'color_id' => 3, 'size_id' => 7],
            ['product_id' => 4, 'color_id' => 1, 'size_id' => 4],
            ['product_id' => 4, 'color_id' => 2, 'size_id' => 4],
            ['product_id' => 4, 'color_id' => 3, 'size_id' => 4],
        ]);
    }
}
