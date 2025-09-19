<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
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
