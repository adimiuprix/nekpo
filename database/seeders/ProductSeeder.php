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
                'image' => 'mobilelegends.webp',
                'banner' => '',
                'vendor_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Free Fire',
                'description' => 'Battle royale mobile game populer dari Garena.',
                'slug' => Str::slug('Free Fire'),
                'image' => 'freefire.webp',
                'banner' => '',
                'vendor_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PUBG Mobile',
                'description' => 'Game battle royale terkenal yang dikembangkan Tencent & Krafton.',
                'slug' => Str::slug('PUBG Mobile'),
                'image' => 'pubgm.webp',
                'banner' => '',
                'vendor_id' => 33,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Genshin Impact',
                'description' => 'RPG open-world dengan sistem gacha yang dikembangkan miHoYo.',
                'slug' => Str::slug('Genshin Impact'),
                'image' => 'genshin.webp',
                'banner' => '',
                'vendor_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Call of Duty: Mobile',
                'description' => 'FPS mobile dengan mode battle royale dan multiplayer klasik.',
                'slug' => Str::slug('Call of Duty: Mobile'),
                'image' => 'codm.webp',
                'banner' => '',
                'vendor_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Valorant',
                'description' => 'Game tactical FPS populer yang dikembangkan dan dipublikasikan oleh Riot Games.',
                'slug' => Str::slug('Valorant'),
                'image' => 'valorant.webp',
                'banner' => '',
                'vendor_id' => 26,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Clash of Clans',
                'description' => 'Game strategi pembangunan desa dengan elemen multiplayer.',
                'slug' => Str::slug('Clash of Clans'),
                'image' => 'clash_of_clans.webp',
                'banner' => '',
                'vendor_id' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Clash Royale',
                'description' => 'Game strategi kartu real-time dari Supercell.',
                'slug' => Str::slug('Clash Royale'),
                'image' => 'clash_royale.webp',
                'banner' => '',
                'vendor_id' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Among Us',
                'description' => 'Game sosial deduksi di mana pemain mencari impostor.',
                'slug' => Str::slug('Among Us'),
                'image' => 'amongus.webp',
                'banner' => '',
                'vendor_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fortnite',
                'description' => 'Battle royale dengan elemen bangunan yang dikembangkan Epic Games.',
                'slug' => Str::slug('Fortnite'),
                'image' => 'fortnite.webp',
                'banner' => '',
                'vendor_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
