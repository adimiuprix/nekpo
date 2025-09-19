<?php

namespace App\Http\Controllers\ServiceAuth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        return view('signin');
    }
}
