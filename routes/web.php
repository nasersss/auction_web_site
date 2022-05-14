<?php
namespace App\Http\Controllers;

use App\Models\City;
use App\Models\UserProfile;
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



Route::get('/add_view',[Maincontroller::class,'show']);


// Route::get('/home',function(){
//     return view('index');
// })->name('home');

// Route::get('/home',function(){
//     return view('index');
// })->name('users');

Route::get('/auction',function(){
    return view('auction');
})->name('auction');
// Route::get('/detail',function(){
//     return view('detail');
//     })->name('details-car');

Route::get('/admin',function(){
    return view('admin.dashboard_home');
});

Route::get('/login',function(){
    return view('auth.login');
});


    Route::get('/ContactUs',[ContactUs::class,'ContactUs'])->name('ContactUs');
    Route::get('/AboutUs',[AboutUs::class,'AboutUs'])->name('AboutUs');
    Route::get('/CommonQuestion',[CommonQuestion::class,'CommonQuestion'])->name('CommonQuestion');
    Route::get('/Cart',[Cart::class,'Cart'])->name('Cart');








Route::get('/register', function () {
    return view('auth.register');
})->name("register");
Route::get('/reset', function () {
    return view('auth.reset');
});
Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/superAdmin', [SuperAdminController::class, 'index'])->name('superAdmin');


// Route::get('/listCategories', [App\Http\Controllers\CategoryController::class, 'index'])->name('listCategories');
// Route::get('/createCategory', [App\Http\Controllers\CategoryController::class, 'create'])->name('createCategory');
// Route::get('/storeCategory', [App\Http\Controllers\CategoryController::class, 'store'])->name('storeCategory');
// Route::get('/editCategory', [App\Http\Controllers\CategoryController::class, 'edit'])->name('editCategory');
// Route::get('/updateCategory', [App\Http\Controllers\CategoryController::class, 'update'])->name('updateCategory');
// Route::get('/toggleCategory', [App\Http\Controllers\CategoryController::class, 'toggle'])->name('toggleCategory');
// Route::get('/uploadFileCategory', [App\Http\Controllers\CategoryController::class, 'uploadFile'])->name('uploadFileCategory');

########## polices route #######
Route::group(['middleware' => 'is.admin'], function () {
Route::get('/list_policies',[PoliciesController::class,"listPolicies"])->name("list_policies");
Route::get('/add_policies',[PoliciesController::class,"addPolicies"])->name("add_policies");
Route::post('/save_policies',[PoliciesController::class,"store"])->name("save_policies");
Route::get('edit_policies/{PoliceId}',[PoliciesController::class,'edit'])->name('edit_policies');
Route::post('update_policies/{PoliceId}',[PoliciesController::class,'update'])->name('update_policies');
Route::get('toggle_policies/{PoliceId}',[PoliciesController::class,'toggle'])->name('toggle_policies');
Route::get('/view_policies',[PoliciesController::class,'viewPolicies'])->name('view_policies');
########## user route
Route::get('/list_user',[UserProfileController::class,"listUser"])->name("list-user");
Route::get('toggle_users/{userId}',[UserProfileController::class,'toggle'])->name('toggle_users');
Route::get('edit_users/{userId}',[UserProfileController::class,'editUser'])->name('edit_user');
Route::post('update_user/{PoliceId}',[UserProfileController::class,'updateUser'])->name('update_users');
});
##########################

Route::get('/',[AuctionController::class,"viewAuction"])->name("view_action");
Route::get('detail_car/{carId}',[AuctionController::class,"detailAuction"])->name("action_detail");
Route::get('/auction_review',[AuctionController::class,"auctionReview"])->name("auction_review");
Route::get('/toggle_auctions/{auctionId}',[AuctionController::class,"toggle"])->name("toggle_auction");

############## route address
############## route state
Route::get('/add_state',[StateController::class,"create"])->name("add_state");
Route::post('/save_state',[StateController::class,"store"])->name("store_state");
Route::get('edit_state/{stateId}',[StateController::class,'edit'])->name('edit_state');
Route::post('update_state/{stateId}',[StateController::class,'update'])->name('update_state');
Route::get('toggle_state/{stateId}',[StateController::class,'toggle'])->name('toggle_state');
Route::get('list_state',[StateController::class,'listState'])->name('list_state');


############## route city

Route::get('/add_city',[CityController::class,"create"])->name("add_city");
Route::post('/save_city',[CityController::class,"store"])->name("store_city");
Route::get('edit_city/{cityId}',[CityController::class,'edit'])->name('edit_city');
Route::post('update_city/{cityId}',[CityController::class,'update'])->name('update_city');
Route::get('toggle_city/{cityId}',[CityController::class,'toggle'])->name('toggle_city');
Route::get('list_city',[CityController::class,'listCity'])->name('list_City');

####################### route  vehicle_types

Route::get('/add_vehicle',[VehicleTypeController::class,"create"])->name("add_vehicle");
Route::post('/save_vehicle',[VehicleTypeController::class,"store"])->name("store_vehicle");
Route::get('edit_vehicle/{Id}',[VehicleTypeController::class,'edit'])->name('edit_vehicle');
Route::post('update_vehicle/{Id}',[VehicleTypeController::class,'update'])->name('update_vehicle');
Route::get('toggle_vehicle/{Id}',[VehicleTypeController::class,'toggle'])->name('toggle_vehicle');
Route::get('list_vehicle',[VehicleTypeController::class,'listVehicle'])->name('list_vehicle');
