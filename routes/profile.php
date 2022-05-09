<?php

namespace App\Http\Controllers;

// use App\Models\UserProfile;
use Illuminate\Support\Facades\Route;

Route::get('/profile', [UserProfileController::class,'show'])->name('profile');



Route::get('show/User',[UserProfileController::class,'show'])->name('showUser');


Route::get('show/AllUsers',[UserProfileController::class,'index'])->name('showAllUsers');

Route::get('create_profile', [UserProfileController::class, 'create'])->name('create_profile');

Route::post('store_profile/{userProfile}', [UserProfileController::class, 'store'])->name('store_profile');


Route::get('edit_profile/{userProfile}', [UserProfileController::class, 'edit'])->name('edit_profile');

Route::post('update_profile/{userProfile}', [UserProfileController::class, 'update'])->name('update_profile');

Route::get('/notActive', function () {
    return view('notActive');
})->name('notActive');
