<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class webSiteController extends Controller
{
    /**---- index page functionality ------ */
    public function index(){
        // code strat here 
        return view('frontend.index');

    }
    /**---- index page functionality ------ */
    public function about(){
        // code strat here 
        return view('frontend.pages.about');

    }
}
