<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LikeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/', function () {return view('home');})->name('home');
    Route::get('/dashboard', function () {return view('home');})->name('home');
    Route::get('/areas', [AreaController::class, 'area'])->name('area');

    
    
    Route::post('/areas/search', [AreaController::class, 'search']);
    Route::get('/areas/create', [AreaController::class, 'create'])->name('areas.create');
    Route::post('/areas', [AreaController::class, 'store'])->name('areas.store');
    Route::get('/areas/{area}', [AreaController::class, 'show']);
    Route::delete('/areas/{area}', [AreaController::class,'delete']);
    
    Route::get('/reviews', [ReviewController::class, 'review'])->name('review');
    Route::post('/reviews/{area}', [ReviewController::class, 'storeReview']);
    
   
    Route::get('/likes', [LikeController::class, 'likes'])->name('likes');
    Route::post('/areas/like', [AreaController::class, 'like'])->name('areas.like');    
    
    
    
});

require __DIR__.'/auth.php';


