<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;
use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Route;


Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::post('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');

Route::group(['prefix' => 'admin',  AuthCheck::class], function () {
    Route::post('/loginProcess', [UserController::class, 'loginProcess'])->name('user.loginProcess')->withoutMiddleware([AuthCheck::class]);
    Route::resource('user', UserController::class);
    Route::resource('verification', VerificationController::class);
    Route::resource('scan', ScanController::class);
    Route::get('/cetak', [TicketController::class, 'cetak'])->name('ticket.cetak');
    Route::resource('ticket', TicketController::class);
});

Route::get('/login', function () {
    return view('frontend.login');
});

// Route::get('/', function () {
//     return view('frontend.landing');
// });

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});

Route::get('/lineup', function () {
    return view('frontend.detail_lineup');
});

Route::get('/pdf', function () {
    return view('verification.preview2');
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
