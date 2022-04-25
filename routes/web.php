<?php

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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD

=======
Route::get('/header', function () {
    return view('layout.header');
});

Route::get('/login',function(){
    return view('auth.login');
});

Route::get('/register',function(){
    return view('auth.register');
});
Route::get('/reset',function(){
    return view('auth.reset');
});
Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
>>>>>>> upstream/develop


