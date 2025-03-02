<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeValueSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("attribute_values")->insert([
            ["attribute_id" => 1, "value" => "grey"],
            ["attribute_id" => 1, "value" => "silver"],
            ["attribute_id" => 1, "value" => "black"],
            ["attribute_id" => 2, "value" => "13"],
            ["attribute_id" => 2, "value" => "14"],
            ["attribute_id" => 2, "value" => "15"],
            ["attribute_id" => 2, "value" => "16"],
        ]);
    }
}
