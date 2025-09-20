<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Topup Game', 'child' => 'game'],
            ['name' => 'App Premium', 'child' => 'app'],
            ['name' => 'E Wallet', 'child' => 'ewallet'],
            ['name' => 'Pulsa', 'child' => 'pulsa'],
            ['name' => 'Data', 'child' => 'data'],
            ['name' => 'Listrik', 'child' => 'pln'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => Str::slug($category['name'])],
                [
                    'name' => $category['name'],
                    'slug' => Str::slug($category['name']),
                    'child' => $category['child'],
                ]
            );
        }
    }
}
