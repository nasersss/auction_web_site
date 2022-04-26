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
    return view('welcome');
});
Route::get('/add_view',[Maincontroller::class,'show']);

Route::get('/appear_detalis',[Detalies::class,'appear']);
Route::get('/appear_detalis_1',[Detalies_01::class,'appear1']);
Route::get('/appear_detalis_2',[Detalies_02::class,'appear2']);

Route::get('/home',function(){
    return view('index');
});
Route::get('/auction',function(){
    return view('auction');
});




