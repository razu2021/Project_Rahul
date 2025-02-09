<?php

namespace App\Http\Controllers\backend\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Banner;
use App\Models\User;


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





/**===========  inset data functionality ----- */   
    public function insert(Request $request){
       
        // check whice ueser is loged in ///
        $creator = Auth::User()->id;
        
        $insert = Banner::create([
            'banner_heading'=>$request->banner_heading,
            'banner_title'=>$request->banner_title,
            'banner_caption'=>$request->banner_caption,
            'button_name'=>$request->button_name,
            'button_url'=>$request->button_url,
            'creator'=> $creator,
        ]);

       return back();

    }







    /**---- index page method ---- */
    public function recycle(){
        return view('backend.home.banner.recycle');
    }
}
