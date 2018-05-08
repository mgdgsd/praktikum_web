<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        return view('user/dashboard');
    }

    public function about()
    {
    	return view('about');
    }

    public function help()
    {
        return view('help');
    }

    public function idk()
    {
      return view('chart');
    }
}
