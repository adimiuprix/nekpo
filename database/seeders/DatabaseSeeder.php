<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            VendorSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            PopularSeeder::class,
            ProductCategorySeeder::class,
        ]);
    }
}
