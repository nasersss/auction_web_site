<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/superAdmin', [App\Http\Controllers\SuperAdminController::class, 'index'])->name('superAdmin');
