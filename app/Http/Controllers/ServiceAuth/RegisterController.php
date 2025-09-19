<?php

namespace App\Http\Controllers\ServiceAuth;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index(){
        return view('signup');
    }
}
