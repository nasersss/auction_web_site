<?php
namespace App\Http\Controllers;
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
    return view('index');
});
Route::get('/add_view',[Maincontroller::class,'show']);


Route::get('/home',function(){
    return view('index');
})->name('home');

// Route::get('/home',function(){
//     return view('index');
// })->name('users');

Route::get('/auction',function(){
    return view('auction');
})->name('auction');
Route::get('/detail',function(){
    return view('details');
    })->name('details-car');

Route::get('/admin',function(){
    return view('admin.dashboard_home');
});

Route::get('/login',function(){
    return view('auth.login');
});


