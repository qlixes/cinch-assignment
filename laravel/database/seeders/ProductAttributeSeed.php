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
            ['product_id' => 1, 'attribute_id' => 1, 'attribute_value_id' => 2],
            ['product_id' => 1, 'attribute_id' => 2, 'attribute_value_id' => 4],
            ['product_id' => 1, 'attribute_id' => 2, 'attribute_value_id' => 6],
            ['product_id' => 2, 'attribute_id' => 1, 'attribute_value_id' => 2],
            ['product_id' => 2, 'attribute_id' => 2, 'attribute_value_id' => 4],
            ['product_id' => 2, 'attribute_id' => 2, 'attribute_value_id' => 6],
            ['product_id' => 3, 'attribute_id' => 1, 'attribute_value_id' => 1],
            ['product_id' => 3, 'attribute_id' => 1, 'attribute_value_id' => 2],
            ['product_id' => 3, 'attribute_id' => 2, 'attribute_value_id' => 4],
            ['product_id' => 3, 'attribute_id' => 2, 'attribute_value_id' => 5],
            ['product_id' => 3, 'attribute_id' => 2, 'attribute_value_id' => 7],
            ['product_id' => 4, 'attribute_id' => 1, 'attribute_value_id' => 1],
            ['product_id' => 4, 'attribute_id' => 1, 'attribute_value_id' => 3],
            ['product_id' => 4, 'attribute_id' => 2, 'attribute_value_id' => 4],
            ['product_id' => 4, 'attribute_id' => 2, 'attribute_value_id' => 5],
            ['product_id' => 4, 'attribute_id' => 2, 'attribute_value_id' => 6],
        ]);
    }
}
