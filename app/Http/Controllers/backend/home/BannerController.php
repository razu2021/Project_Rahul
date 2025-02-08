<?php

namespace App\Http\Controllers\backend\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**---- index page method ---- */
    public function index(){
        return view('backend.home.banner.index');
    }

    /**---- index page method ---- */
    public function add(){
        return view('backend.home.banner.add');
    }
    /**---- index page method ---- */
    public function view(){
        return view('backend.home.banner.view');
    }
    /**---- index page method ---- */
    public function edit(){
        return view('backend.home.banner.edit');
    }







    /**---- index page method ---- */
    public function recycle(){
        return view('backend.home.banner.recycle');
    }
}
