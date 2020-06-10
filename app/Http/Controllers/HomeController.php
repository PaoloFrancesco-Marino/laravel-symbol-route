<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // show homepage
    public function index() {
        return view('home.index');
    }
}
