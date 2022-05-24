<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\PoliciesController;
use \App\Http\Controllers\CategoryController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\VehicleTypeController;

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

/*Category*/
Route::group(['middleware' => 'is.admin'], function () {
    Route::get('/superAdmin', [SuperAdminController::class, 'index'])->name('superAdmin');
    Route::get('/list_policies', [PoliciesController::class, "listPolicies"])->name("list_policies");
    Route::get('/add_policies', [PoliciesController::class, "addPolicies"])->name("add_policies");
    Route::post('/save_policies', [PoliciesController::class, "store"])->name("save_policies");
    Route::get('edit_policies/{PoliceId}', [PoliciesController::class, 'edit'])->name('edit_policies');
    Route::post('update_policies/{PoliceId}', [PoliciesController::class, 'update'])->name('update_policies');
    Route::get('toggle_policies/{PoliceId}', [PoliciesController::class, 'toggle'])->name('toggle_policies');
########## user route
    Route::get('/list_user', [UserProfileController::class, "listUser"])->name("list-user");
    Route::get('toggle_users/{userId}', [UserProfileController::class, 'toggle'])->name('toggle_users');
    Route::get('edit_users/{userId}', [UserProfileController::class, 'editUser'])->name('edit_user');
    Route::post('update_user/{PoliceId}', [UserProfileController::class, 'updateUser'])->name('update_users');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
######### category routes
    Route::get('list_categories', [CategoryController::class, 'index'])->name('view_cat');
    Route::get('add_categories', [CategoryController::class, 'create'])->name('add-cat');
    Route::get('edit_categories/{categoryId}', [CategoryController::class, 'edit'])->name('edit_categories');
    Route::get('toggle_categories/{categoryId}', [CategoryController::class, 'toggle'])->name('toggle_categories');
    Route::post('save_categories', [CategoryController::class, 'store'])->name('store_categories');
    Route::post('update_categories/{categoryId}', [CategoryController::class, 'update'])->name('update_categories');
############## auction routes
    Route::get('/toggle_auctions/{auctionId}', [AuctionController::class, "toggle"])->name("toggle_auction");

############## route address
############## route state
    Route::get('/add_state', [StateController::class, "create"])->name("add_state");
    Route::post('/save_state', [StateController::class, "store"])->name("store_state");
    Route::get('edit_state/{stateId}', [StateController::class, 'edit'])->name('edit_state');
    Route::post('update_state/{stateId}', [StateController::class, 'update'])->name('update_state');
    Route::get('toggle_state/{stateId}', [StateController::class, 'toggle'])->name('toggle_state');
    Route::get('list_state', [StateController::class, 'listState'])->name('list_state');

############## route city

    Route::get('/add_city', [CityController::class, "create"])->name("add_city");
    Route::post('/save_city', [CityController::class, "store"])->name("store_city");
    Route::get('edit_city/{cityId}', [CityController::class, 'edit'])->name('edit_city');
    Route::post('update_city/{cityId}', [CityController::class, 'update'])->name('update_city');
    Route::get('toggle_city/{cityId}', [CityController::class, 'toggle'])->name('toggle_city');
    Route::get('list_city', [CityController::class, 'listCity'])->name('list_City');

####################### route  vehicle_types

    Route::get('/add_vehicle', [VehicleTypeController::class, "create"])->name("add_vehicle");
    Route::post('/save_vehicle', [VehicleTypeController::class, "store"])->name("store_vehicle");
    Route::get('edit_vehicle/{Id}', [VehicleTypeController::class, 'edit'])->name('edit_vehicle');
    Route::post('update_vehicle/{Id}', [VehicleTypeController::class, 'update'])->name('update_vehicle');
    Route::get('toggle_vehicle/{Id}', [VehicleTypeController::class, 'toggle'])->name('toggle_vehicle');
    Route::get('list_vehicle', [VehicleTypeController::class, 'listVehicle'])->name('list_vehicle');

});
