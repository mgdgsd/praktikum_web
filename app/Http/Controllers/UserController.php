<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function start()
    {
        return view('user/dashboard');
    }
}
