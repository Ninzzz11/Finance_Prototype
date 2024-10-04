<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Contoller
{
    public function home()
    {
        return view('dashboard');
    }
}
