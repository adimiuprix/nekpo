<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Popular;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Slider::where('is_active', true)->get();
        $populars = Popular::with(['product', 'vendor'])->get();
        $categories = Category::with(['products' => function($query) {
            $query->distinct();
        }])->get();

        return view('home', [
            'banners' => $banners,
            'populars' => $populars,
            'categories' => $categories
        ]);
    }

    public function show_item($slug){
        $product = Product::with(['items', 'vendor'])->where('slug', $slug)->firstOrFail();

        return view('show_product', [
            'product' => $product
        ]);
    }

    public function invoices()
    {
        return view('invoices');
    }

    public function price_list()
    {
        return view('price-list');
    }

    public function leaderboard()
    {
        return view('leaderboard');
    }

    public function winrate()
    {
        return view('winrate');
    }

    public function magicwheel()
    {
        return view('magicwheel');
    }

    public function zodiac()
    {
        return view('zodiac');
    }
}
