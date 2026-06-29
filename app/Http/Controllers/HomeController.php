<?php

namespace App\Http\Controllers;

use App\Models\Fashion;

class HomeController extends Controller
{
    public function index()
    {
        $fashion = Fashion::latest()->take(10)->get();
        return view('public_pages.home', compact('fashion'));
    }
}