<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {
    Route::resource('user', UserController::class);
});

Route::get('/', function () {
    return view('frontend.landing');
});

// Route::get('/admin/user', function () {
//     return view('user.index');
// });

Route::get('/admin/ticket', function () {
    return view('verification.index');
});
