<?php

use App\Http\Controllers\AuctionController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;

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

Route::get('/add_auction', [AuctionController::class, 'create'])->name('add-auction');
Route::get('/edit_auction', function () {return view('admin/edit_auction');})->name('edit-auction');
Route::post('/store_auction', [AuctionController::class, 'store'])->name('store-auction');

Route::get('/auctions_review', function () {
return view('admin/auctions_review');
})->name('auctions-review');

Route::get('/users', function () {
    return view('admin/view_users');
})->name('users');

Route::get('/add_categry', function () {
    return view('admin/add_categry');
})->name('add-cat');




Route::get('/view_categry', function () {
    return view('admin/view_cat');
})->name('view_cat');

Route::get('/view_categry', [CategoryController::class, 'index'])->name('view_cat');

/*Category*/
Route::group(['middleware' => 'is.admin'], function () {
    Route::get('list_categories', [CategoryController::class, 'index'])->name('list_categories');
    Route::get('add_categories', [CategoryController::class, 'create'])->name('add_categories');
    Route::get('edit_categories/{categoryId}', [CategoryController::class, 'edit'])->name('edit_categories');
    Route::get('toggle_categories/{categoryId}', [CategoryController::class, 'toggle'])->name('toggle_categories');
    Route::post('save_categories', [CategoryController::class, 'store'])->name('store_categories');
    Route::post('update_categories/{categoryId}', [CategoryController::class, 'update'])->name('update_categories');

    ############### policies route ###########

//     Route::get('/list_policies',[PoliciesController::class,"listPolicies"])->name("list_policies");
// Route::get('/add_policies',[PoliciesController::class,"addPolicies"])->name("add_policies");
// Route::post('/save_policies',[PoliciesController::class,"store"])->name("save_policies");
// Route::get('edit_policies/{PoliceId}',[PoliciesController::class,'edit'])->name('edit_policies');
// Route::post('update_policies/{PoliceId}',[PoliciesController::class,'update'])->name('update_policies');
// Route::get('toggle_policies/{PoliceId}',[PoliciesController::class,'toggle'])->name('toggle_policies');
});
