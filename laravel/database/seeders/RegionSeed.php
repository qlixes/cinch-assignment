<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("regions")->insert([
            ["name" => "Singapore"],
            ["name" => "Malaysia"],
            ["name" => "Indonesia"],
        ]);
    }
}
