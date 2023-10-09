<?php 
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/front', function () {
    return view("front");
});
Route::get('/home', function(){
    return view("front_home");
});
Route::get('/',[FrontController::class,'index'])->name('front.home');
Route::get('/about',[FrontController::class,'about'])->name('front.about');
Route::get('/services',[FrontController::class,'services'])->name('front.services');
Route::get('/packages',[FrontController::class,'packages'])->name('front.packages');
Route::get('/destination',[FrontController::class,'destination'])->name('front.destination');
Route::get('/booking',[FrontController::class,'booking'])->name('front.booking');
Route::get('/team',[FrontController::class,'team'])->name('front.team');
Route::get('/testimonial',[FrontController::class,'testimonial'])->name('front.testimonial');
Route::get('/err',[FrontController::class,'err'])->name('front.err');
Route::get('/contact',[FrontController::class,'contact'])->name('front.contact');
Route::get('master',function(){
    return view('front_master');
});
