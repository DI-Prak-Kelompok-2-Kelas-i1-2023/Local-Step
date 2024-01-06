<?php

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
    return view('index');
})->name('index');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home_in', function () {
    return view('home_in');
})->name('home_in');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/profile_data', function () {
    return view('profile_data');
})->name('profile_data');

Route::get('/profile_alamat', function () {
    return view('profile_alamat');
})->name('profile_alamat');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/shop_home', function () {
    return view('shop');
})->name('shop_home');

Route::get('/shop_product', function () {
    return view('shop_prod');
})->name('shop_product');