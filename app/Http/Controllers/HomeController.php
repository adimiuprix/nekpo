<?php

namespace App\Http\Controllers;

use App\Models\Popular;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $populars = Popular::with(['product', 'vendor'])->get();
        $categories = Category::with(['products' => function($query) {
            $query->distinct();
        }])->get();

        return view('home', [
            'populars' => $populars,
            'categories' => $categories
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
