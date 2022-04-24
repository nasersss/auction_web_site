<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/dashboard', function () {
    return view('admin/home');
})->name('dash-home');

Route::get('/add_auction', function () {
    return view('admin/add_auction');
})->name('add-auction');

Route::get('/auctions _review', function () {
    return view('admin/auctions_review');
})->name('auctions-review');

Route::get('/users', function () {
    return view('admin/view_users');

Route::get('/add_categry', function () {
    return view('admin/add_categry');
});
