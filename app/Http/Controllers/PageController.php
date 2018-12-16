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

    /**
     * Show the rules page
     *
     * @return View
     */
    public function rules()
    {
        return view('pages.rules');
    }
}
