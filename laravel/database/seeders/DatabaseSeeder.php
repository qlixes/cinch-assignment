<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AttributeSeed::class,
            AttributeValueSeed::class,
            RentalPeriodSeed::class,
            RegionSeed::class,
            ProductSeed::class,
            ProductAttributeSeed::class,
            ProductPriceSeed::class,
        ]);
    }
}
