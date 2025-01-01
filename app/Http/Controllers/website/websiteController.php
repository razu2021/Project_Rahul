<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class websiteController extends Controller
{
    // blog page 
     public function blog_page(){
        $userdata = User::get();
        
        return view('pages.profile.blog',compact('userdata'));

     }



    //  team page 
     public function team_page(){
        // code 
        return view('pages.profile.team');

     }



    //  team page 
     public function news_page(){
        // code 
        return view('pages.profile.news');

     }
    //  team page 
     public function contact_page(){
        // code 
        return view('pages.profile.contact');

     }





}
