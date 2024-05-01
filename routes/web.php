<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemUsercontroller;

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

Route::get('/',function(){
    return redirect('/dashboard');
});


Route::middleware('CheckRole')->group(function () {
    Route::resource('item',ItemController::class)->except(['item.show']);
    Route::resource('category',CategoryController::class);
});


Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/order',[ItemUsercontroller::class,'store']);
    Route::get('/order',[ItemUserController::class,'index'])->name('order');
    Route::delete('/order',[ItemUserController::class,'delete']);
    Route::get('/checkout',[ItemUserController::Class,'checkout'])->name('checkout');
    Route::post('/checkout',[ItemUserController::class,'final']);

    Route::get('item/show/{id}',[ItemController::class,'show'])->name('item.show');
    Route::get('order/{id}',[ItemController::class,'order']);
    Route::delete('order/{id}',[ItemController::class,'orderDestroy'])->name('order.destroy');
});

require __DIR__.'/auth.php';


