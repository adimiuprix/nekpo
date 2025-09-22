# Nekpo - Game Top-up & Gaming Platform

## Deskripsi Project

Nekpo adalah platform e-commerce terintegrasi yang spesialisasi dalam layanan top-up game dan berbagai fitur gaming lainnya. Platform ini dibangun menggunakan framework Laravel terbaru (Laravel 12) dengan PHP 8.2+ untuk menyediakan pengalaman berbelanja digital yang cepat dan aman.

## Fitur Utama

### 🛒 Layanan Top-up Game
- **Top-up Otomatis**: Sistem top-up instan untuk berbagai game popular
- **Multi-Vendor**: Mendukung berbagai vendor dan publisher game terkemuka
- **Bundle & Package**: Penawaran paket bundel khusus untuk pengalaman gaming maksimal

### 🎮 Platform Gaming
- **Leaderboard**: Sistem peringkat pemain global
- **Winrate Calculator**: Kalkulator tingkat kemenangan dengan analisa detail
- **Magic Wheel**: Permainan putar roda keberuntungan
- **Zodiac Fortune**: Fitur ramalan nasib berbasis zodiak

### 💼 Sistem E-commerce
- **Manajemen Produk**: Sistem produk dengan kategori terorganisir
- **Keranjang Belanja**: Pengalaman belanja yang intuitif
- **Invoice System**: Manajemen transaksi yang komprehensif

## Teknologi Stack

- **Framework**: Laravel 12.0
- **Bahasa Programming**: PHP 8.2+
- **Database**: MySQL/SQLite
- **Frontend**: Blade Templates, CSS, JavaScript
- **Testing**: Pest PHP
- **Development Tools**: Vite, npm, Composer

## Struktur Database

### Model Utama
- **User**: Sistem autentikasi pengguna
- **Product**: Produk top-up dan item game
- **Vendor**: Publisher dan developer game
- **Category**: Kategorisasi produk
- **Bundle**: Paket bundel produk
- **Item**: Item individual dalam paket
- **Slider**: Konten slider halaman depan
- **Popular**: Item terpopuler
- **Invoice**: Manajemen transaksi

### Relasi Database
- Product belongs to Vendor
- Product belongs to Category
- Bundle belongs to Product
- Item belongs to Product

## Deployment & Development

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & npm
- MySQL atau SQLite

### Instalasi

1. Clone repository
```bash
git clone https://github.com/adimiuprix/nekpo.git
cd nekpo
```

2. Install dependencies PHP
```bash
composer install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Setup database
```bash
php artisan migrate
php artisan db:seed
```

5. Install assets
```bash
npm install
npm run dev
```

6. Jalankan server development
```bash
php artisan serve
```

### Commands Development
```bash
# Jalankan semua service sekaligus (server, queue, vite)
composer run dev

# Jalankan testing
composer run test
```

## Struktur Folder

```
nekpo/
├── app/                    # Aplikasi Laravel (Models, Controllers, Views)
│   ├── Http/Controllers/   # Controller logic
│   ├── Models/            # Eloquent models
│   ├── View/Components/   # Blade components
├── database/              # Migrations, seeders, factories
├── public/                # Static assets
│   ├── assets/           # Gambar, CSS, JS
│   │   ├── banner/       # Banner slider
│   │   ├── banner_product/ # Banner produk game
│   │   ├── image/        # Gambar umum
│   │   └── js/           # JavaScript files
├── resources/            # Sumber daya frontend
│   ├── css/              # Stylesheets
│   ├── js/               # JavaScript source
│   └── views/            # Blade templates
├── routes/               # definisi route web.php dan console.php
├── tests/                # Testing framework dengan Pest
└── config/               # Konfigurasi aplikasi
```

## Game & Vendor Didukung

Platform ini mendukung berbagai game populer termasuk:

### Mobile Games
- Mobile Legends
- PUBG Mobile
- COD Mobile
- Clash of Clans
- Lineage 2M
- League of Legends
- FIFA Mobile
- One Punch Man: The Strongest
- Racing Master
- Undawn

### Console/PC Games
- Genshin Impact
- Free Fire
- Valorant

## API & Integrasi

- **Payment Gateway**: Integrasi dengan berbagai metode pembayaran
- **Third-party Services**: Auth services dan layanan eksternal
- **Queue System**: Background processing untuk order

## Testing

Project menggunakan Pest PHP untuk testing. Jalankan semua test dengan:

```bash
composer run test
```

## Kontribusi

1. Fork repository
2. Buat feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Kontak

Project Link: [https://github.com/adimiuprix/nekpo](https://github.com/adimiuprix/nekpo)

---

**Nekpo** - Membawa pengalaman gaming digital ke level berikutnya 🚀
