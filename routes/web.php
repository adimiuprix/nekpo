<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceAuth\LoginController;
use App\Http\Controllers\ServiceAuth\RegisterController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/invoices', [HomeController::class, 'invoices'])->name('invoices');
Route::get('/price-list', [HomeController::class, 'price_list'])->name('price_list');
Route::get('/leaderboard', [HomeController::class, 'leaderboard'])->name('leaderboard');
Route::get('/winrate', [HomeController::class, 'winrate'])->name('winrate');
Route::get('/magic-wheel', [HomeController::class, 'magicwheel'])->name('magicwheel');
Route::get('/zodiac', [HomeController::class, 'zodiac'])->name('zodiac');

Route::get('/sign-in', [LoginController::class, 'index'])->name('signin');
Route::get('/sign-up', [RegisterController::class, 'index'])->name('signup');