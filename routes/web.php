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
    return view('home');
})->name('home');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/product', function () {
    return view('non/product');
})->name('product');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/login', function () {
    return view('index');
})->name('index');

Route::get('/brand', function () {
    return view('non/brand');
})->name('brand');

// Member
Route::get('mproduct', function () {
    return view('memb/product');
})->name('product');

Route::get('/mbrand', function () {
    return view('memb/brand');
})->name('mbrand');

Route::get('/member', function () {
    return view('home_in');
})->name('home_in');

Route::get('/profile', function () {
    return view('memb/profile_data');
})->name('profile_data');

Route::get('/adress', function () {
    return view('memb/profile_alamat');
})->name('profile_alamat');

