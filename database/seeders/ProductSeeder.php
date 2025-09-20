<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the product seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Mobile Legends',
                'description' => 'MOBA paling populer di Asia Tenggara.',
                'slug' => Str::slug('Mobile Legends'),
                'image_path' => 'mobilelegends.webp',
                'vendor_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Free Fire',
                'description' => 'Battle royale mobile game populer dari Garena.',
                'slug' => Str::slug('Free Fire'),
                'image_path' => 'freefire.webp',
                'vendor_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PUBG Mobile',
                'description' => 'Game battle royale terkenal yang dikembangkan Tencent & Krafton.',
                'slug' => Str::slug('PUBG Mobile'),
                'image_path' => 'pubgm.webp',
                'vendor_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Genshin Impact',
                'description' => 'RPG open-world dengan sistem gacha yang dikembangkan miHoYo.',
                'slug' => Str::slug('Genshin Impact'),
                'image_path' => 'genshin.webp',
                'vendor_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Call of Duty: Mobile',
                'description' => 'FPS mobile dengan mode battle royale dan multiplayer klasik.',
                'slug' => Str::slug('Call of Duty: Mobile'),
                'image_path' => 'codm.webp',
                'vendor_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Valorant',
                'description' => 'Game tactical FPS populer yang dikembangkan dan dipublikasikan oleh Riot Games.',
                'slug' => Str::slug('Valorant'),
                'image_path' => 'valorant.webp',
                'vendor_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Clash of Clans',
                'description' => 'Game strategi pembangunan desa dengan elemen multiplayer.',
                'slug' => Str::slug('Clash of Clans'),
                'image_path' => 'clash_of_clans.webp',
                'vendor_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Clash Royale',
                'description' => 'Game strategi kartu real-time dari Supercell.',
                'slug' => Str::slug('Clash Royale'),
                'image_path' => 'clash_royale.webp',
                'vendor_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Among Us',
                'description' => 'Game sosial deduksi di mana pemain mencari impostor.',
                'slug' => Str::slug('Among Us'),
                'image_path' => 'amongus.webp',
                'vendor_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fortnite',
                'description' => 'Battle royale dengan elemen bangunan yang dikembangkan Epic Games.',
                'slug' => Str::slug('Fortnite'),
                'image_path' => 'fortnite.webp',
                'vendor_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
