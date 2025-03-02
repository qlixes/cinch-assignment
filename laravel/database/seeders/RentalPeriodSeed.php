<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalPeriodSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("rental_periods")->insert([
            ["name" => "3 Months", "value" => 3],
            ["name" => "6 Months", "value" => 6],
            ["name" => "12 Months", "value" => 12],
        ]);
    }
}
