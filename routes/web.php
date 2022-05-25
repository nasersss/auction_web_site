<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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


#####routs for all
Route::get('detail_car/{carId}', [AuctionController::class, "detailAuction"])->name("action_detail");
Route::get('/ContactUs', [ContactUs::class, 'ContactUs'])->name('ContactUs');
Route::get('/AboutUs', [AboutUs::class, 'AboutUs'])->name('AboutUs');
Route::get('/CommonQuestion', [CommonQuestion::class, 'CommonQuestion'])->name('CommonQuestion');
Route::get('/ContactUs', [ContactUs::class, 'ContactUs'])->name('ContactUs');
Route::get('/view_policies', [PoliciesController::class, 'viewPolicies'])->name('view_policies');
Route::get('/auction', [AuctionController::class, 'index'])->name('auction');
Route::post('/auction', [AuctionController::class, 'index'])->name('auction');
Route::get('/', [AuctionController::class, "viewAuction"])->name("index");
Route::post('/bidding', [BiddingController::class, 'store'])->name('bidding');

####auth
Auth::routes(['verify' => true]);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    ########## auction route #######
    Route::get('/auctions_review', [AuctionController::class, 'auctionReview'])->name('auction_review');
    Route::get('/dash-user', [UserProfileController::class, 'userDashboard'])->name('dash-user');
    Route::get('/add_auction', [AuctionController::class, 'create'])->name('add-auction');
    Route::get('/edit_auction/{categoryId}', [AuctionController::class, 'edit'])->name('edit-auction');
    Route::post('/update_auction', [AuctionController::class, 'update'])->name('update-auction');
    Route::post('/store_auction', [AuctionController::class, 'store'])->name('store-auction');
    Route::get('/delete_auction_image/{id}', [AuctionController::class, 'deleteImage'])->name('delete_auction_image');
    Route::get('/endauction', [AuctionController::class, "checkAucationDate"])->name('endauction');
    Route::get('/endOneauction/{id}', [AuctionController::class, "endOneauction"])->name('endOneauction');
    Route::post('/makeAuctionToSell', [AuctionController::class, "makeAuctionToSell"])->name('isActiveToSell');
    Route::post('/actionTimeExtended', [AuctionController::class, "actionTimeExtended"])->name('actionTimeExtended');
    Route::get('/derlevery', [PymentContoller::class, 'deleveryPyment'])->name('derlevery');

    ###Pyment and order route
    Route::get('pyment/response/{info}', [PymentContoller::class, 'showPyment'])->name('pyment/response');
    Route::get('pyment/cancel/{cancel}', [PymentContoller::class, 'pymentCancel'])->name('pymentCancel');
    Route::get('pyment/cancel', [PymentContoller::class, 'viewCancel'])->name('viewCancel');
    Route::post('/doPayment', [PymentContoller::class, 'doPayment'])->name('doPaymetn');

    Route::get('show_notification', [NotificationController::class, 'index'])->name('show_notification');
    Route::get('makeNotificationSeen/{id}', [NotificationController::class, 'makeNotificationSeen'])->name('makeNotificationSeen');
    Route::post('comfirmPyment', [BiddingController::class, 'addAmountOfBidding'])->name('comfirmPyment');

####################    delivery rout
    Route::get('/delivery', [DeliveryController::class, 'create'])->name('delivery');
    Route::post('/store_delivery', [DeliveryController::class, 'store'])->name('store_delivery');

##order
    Route::post('/paymentOfDelevry', [OrderController::class, 'paymentOfDeleviry'])->name('paymentOfDeleviry');
    Route::get('/comfirmDelevery/{id}', [OrderController::class, 'comfirmDelevery'])->name('comfirmDelevery');
    Route::get('/comfirmSell/{id}', [OrderController::class, 'comfirmSell'])->name('comfirmSell');
    Route::post('/makeDeleverDone', [OrderController::class, 'makeDeleverDone'])->name('makeDeleverDone');
    Route::get('/wallet', [OrderController::class, 'showWallet'])->name('wallet');

    ##Profilo


});

//Auction

