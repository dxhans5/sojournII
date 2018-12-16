<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the homepage
     *
     * @return View
     */
    public function homepage()
    {
        return view('pages.home');
    }
}
