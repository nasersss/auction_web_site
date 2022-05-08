<?php

namespace App\Http\Controllers;

// use App\Models\UserProfile;
use Illuminate\Support\Facades\Route;


Route::get('show/User',[UserProfileController::class,'show'])->name('showUser');


Route::get('show/AllUsers',[UserProfileController::class,'index'])->name('showAllUsers');

Route::get('edit_profile/{userProfile}', [UserProfileController::class, 'edit'])->name('edit_profile');

Route::get('/notActive', function () {
    return view('notActive');
})->name('notActive');