<?php
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\website\websiteController;

// home route 
Route::get('/', function () {
    return view('welcome');
});

// about route 
Route::get('about-us', function(){
    return view('about_page');  // return view or render view file 
});


// my custom route 
Route::get('myroute',function(){
    // return page view 
    return view('contact');
});


// redirect route 
Route::redirect('/service',  '/');


// route for nested view 
Route::get('index',function(){
    return view('pages.index');
});

Route::get('service',function(){
    return view('pages.service');
});



// route group 

Route::prefix('rdp')->group(function(){

Route::get( '/blog',[websiteController::class,'blog_page'])->name('blog');
Route::get( '/team',[websiteController::class,'team_page'])->name('team');
Route::get( '/news',[websiteController::class,'news_page'])->name('news');
Route::get( '/contact-with-us',[websiteController::class,'contact_page'])->name('contact');

});









// Route::prefix('xyz')->group(function(){
//     Route::get('/blog',function(){
//         return view('pages.profile.blog');
//     });

//     Route::get('/team',function(){
//         return view('pages.profile.team');
//     });

//     Route::get('/news',function(){
//         return view('pages.profile.news');
//     });

//     Route::get('/contact',function(){
//         return view('pages.profile.contact');
//     });


// });













Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
