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

// Non Member

Route::get('/', function () {
    return view('non/home');
})->name('home');

Route::get('/login', function () {
    return view('index');
})->name('index');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/nonproduct', function () {
    return view('non/product');
})->name('nonproduct');

Route::get('/nonsearch', function () {
    return view('non/search');
})->name('nonsearch');

Route::get('/nonshop_home', function () {
    return view('non/shop');
})->name('nonshop_home');

Route::get('/nonshop_product', function () {
    return view('non/shop_prod');
})->name('nonshop_product');

Route::get('/nonbrand', function () {
    return view('non/brand');
})->name('nonbrand');

// Member
Route::get('/mhome', function () {
    return view('memb/home');
})->name('mhome');

Route::get('/mbrand', function () {
    return view('memb/brand');
})->name('mbrand');

Route::get('/cart', function(){
    return view('memb/cart');
})->name('cart');

Route::get('/mproduct', function () {
    return view('memb/product');
})->name('mproduct');

Route::get('/payment', function () {
    return view('memb/payment');
})->name('payment');

Route::get('/msearch', function () {
    return view('memb/search');
})->name('msearch');

Route::get('/profile_data', function () {
    return view('memb/profile_data');
})->name('profile_data');

Route::get('/profile_alamat', function () {
    return view('memb/profile_alamat');
})->name('profile_alamat');

Route::Get('/checkout', function(){
    return view('memb/checkout');
})->name('checkout');

Route::get('/mshop_home', function () {
    return view('memb/shop');
})->name('mshop_home');

Route::get('/mshop_product', function () {
    return view('memb/shop_prod');
})->name('mshop_product');

Route::get('/wishlist', function () {
    return view('memb/wishlist');
})->name('wishlist');