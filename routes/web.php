<?php

use App\Http\Controllers\foodController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->group(function(){
    Route::get('/category/food-beverage', [ProductsController::class, 'foodBeverage'])->name('products.food-beverage');
    Route::get('/category/beauty-health', [ProductsController::class, 'beautyHealth'])->name('products.beauty-heatlh');
    Route::get('/category/home-care', [ProductsController::class, 'homeCare'])->name('products.home-care');
    Route::get('/category/baby-kid', [ProductsController::class, 'babyKid'])->name('products.baby-kid');
});

Route::get('user/{id}/name/{name}', [UserController::class,'Showprofile'])->name('user.profile');

Route::get('/transaksi/sell', [SellController::class,'sell']);