<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AmbasderController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\GoogleReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\EmailController;
use App\Models\Ambasder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Front End Routes 


Route::get('/',[FrontController::class,'index'])->name('front.index');
Route::get('/how-it-works',[FrontController::class,'HowItWorks'])->name('front.how-it-works');
Route::get('/services/kitchen',[FrontController::class,'Kitchen'])->name('front.kitchen');
Route::get('/services/washroom',[FrontController::class,'Washroom'])->name('front.washroom');
Route::get('/gallery',[FrontController::class,'Gallery'])->name('front.gallery');
Route::get('/design',[FrontController::class,'Design'])->name('front.design');
// Route::get('/allservices',[FrontController::class,'Allservices'])->name('allservices');
Route::get('/remodeling',[FrontController::class,'Remodeling'])->name('remodeling');
Route::get('/renovation-experience', [FrontController::class, 'reno_exp'])->name('renovation-experience');
Route::get('/whychooseus', [FrontController::class, 'Whychooseus'])->name('whychooseus');
Route::get('/people', [FrontController::class, 'People'])->name('people');
Route::get('/businessoppertunities', [FrontController::class, 'Businessoppertunities'])->name('businessoppertunities');
Route::get('/enquiry', [FrontController::class, 'enquiry'])->name('enquiry');
Route::get('/career', [FrontController::class, 'career'])->name('career');
Route::get('/commercialrenovation', [FrontController::class, 'Commercialrenovation'])->name('commercialrenovation');
Route::get('/aboutus',[FrontController::class,'Aboutus'])->name('aboutus');
Route::get('/openservice/{name?}',[FrontController::class,'Openservice'])->name('openservice');

// Dashhboard Routes start 
Route::middleware('admin')->group(function(){
Route::get('/admin',[AdminController::class,'Show'])->name('admindashboard');
Route::post('/sliderpics',[AdminController::class,"Sliderpicssave"])->name('sliderpics');
Route::get('/showcompanylog/{id?}',[AdminController::class,"ShowCompanyLog"])->name('showcompanylog');
Route::post('/savecompanylogoimage/{id?}',[AdminController::class,"Savecompanylogoimage"])->name('savecompanylogoimage');
Route::get('/deletecompanylogo/{id?}',[AdminController::class,"Deletecompanylogo"])->name('deletecompanylogo');
Route::post('/saveplanecard',[AdminController::class,"Saveplanecard"])->name("saveplanecard");
Route::get('/showadmingallerypage',[AdminController::class,'Showadmingallerypage'])->name('showadmingallerypage');
Route::post('/savegalleryrecord',[AdminController::class,'Savegalleryrecord'])->name('savegalleryrecord');
Route::get('/deletegallaryimage/{id?}',[AdminController::class,'Deletegallaryimage'])->name('deletegallaryimage');
Route::get('/myregister', [AdminController::class, 'myregister']);
Route::get('/allservices/{name?}', [AdminController::class, 'Allservices'])->name('allservices');
Route::post('/addallservices', [AdminController::class, 'Addallservices'])->name('addallservices');
Route::post('/addquestion', [AdminController::class, 'Addquestion'])->name('addquestion');
Route::get('/deletefaq/{id?}/{name}', [AdminController::class, 'Deletefaq'])->name('deletefaq');


// -----------Dashboard Routes End ----------

// Design Routes 
Route::resource('designs',DesignController::class);
// Design Routes End 

// Service Routes 
Route::resource('services',ServiceController::class);
// Service Routes End 

// GoogleReview Routes 
Route::resource('googlereviews',GoogleReviewController::class);
// GoogleReview Routes End 


// GoogleReview Routes 
Route::resource('ambesders',AmbasderController::class);
// GoogleReview Routes End 


Route::get('adminfooterdetail',[AdminController::class,'Adminfooterdetail'])->name('adminfooterdetail');
Route::post('footerdetail',[AdminController::class,'Footerdetail'])->name('footerdetail');
// Dashhboard Routes End
});


/* Google Social Login */
Route::get('/login/google', [GoogleLoginController::class,'redirect'])->name('login.google-redirect');
Route::get('/login/google/callback', [GoogleLoginController::class,'callback'])->name('login.google-callback');

// Email 

Route::get('/send-email', [EmailController::class, 'index']);

Route::get('/dashboard', function () {
    return redirect()->route('admindashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
