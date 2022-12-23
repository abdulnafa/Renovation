<?php

use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\ProfileController;
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




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
