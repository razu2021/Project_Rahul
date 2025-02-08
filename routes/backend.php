<?php 
use Illuminate\Support\Facades\Route;


/**===  dashboard controller web ====== */
use App\Http\Controllers\backend\dashboardController;

/**==== backend controller use here -------- */
use App\Http\Controllers\backend\home\BannerController;

/**----- middleware group start here ------ */
Route::middleware(['auth'])->group(function(){
/**----- middleware group start here ------ */






 
/** ========= dashboard route start ====== */
Route::get('admin/dashboard',[dashboardController::class ,'index'])->name('dashboard');



/**===== backend route start here =======*/


/** banner route start here -- */
Route::prefix('home-page-banner/')->name('home_banner.')->group(function(){
    Route::get('all',[BannerController::class,'index'])->name('all');
    Route::get('add',[BannerController::class,'add'])->name('add');
    Route::get('view',[BannerController::class,'view'])->name('view');
    Route::get('edit',[BannerController::class,'edit'])->name('edit');
    Route::get('recycle',[BannerController::class,'recycle'])->name('recycle');
    
});








/**===== backend route end here =======*/













/**----- middleware group end here ------ */
});
/**----- middleware group end here ------ */


