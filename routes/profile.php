<?php

namespace App\Http\Controllers;

// use App\Models\UserProfile;
use Illuminate\Support\Facades\Route;


Route::get('show/User',[UserProfileController::class,'index'])->name('showUser');

Route::get('/notActive', function () {
    return view('notActive');
})->name('notActive');