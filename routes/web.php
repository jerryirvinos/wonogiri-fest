<?php

use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {
    Route::resource('user', UserController::class);
    Route::resource('verification', VerificationController::class);
    Route::resource('ticket', TicketController::class);
});

Route::get('/', function () {
    return view('frontend.landing');
});

// Route::get('/admin/user', function () {
//     return view('user.index');
// });

// Route::get('/admin/ticket', function () {
//     return view('verification.index');
// });

Route::get('/admin/edit', function () {
    return view('verification.edit');
});
