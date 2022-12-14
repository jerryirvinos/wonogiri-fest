<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LineupController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketMasterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;
use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/lineuplist', [LandingController::class, 'lineuplist'])->name('landing.lineuplist');
Route::post('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');

Route::group(['prefix' => 'admin', 'middleware' => 'auth.check'], function () {
    Route::post('/loginProcess', [UserController::class, 'loginProcess'])->name('user.loginProcess')->withoutMiddleware([AuthCheck::class]);
    Route::resource('user', UserController::class);
    Route::resource('verification', VerificationController::class);
    Route::resource('tickettype', TicketMasterController::class);
    Route::resource('scan', ScanController::class);
    Route::get('/cetak', [TicketController::class, 'cetak'])->name('ticket.cetak');
    Route::resource('ticket', TicketController::class);
    Route::resource('merchandise', MerchandiseController::class);
    Route::post('/save_order', [LineupController::class, 'save_order'])->name('lineup.save_order');
    Route::resource('lineup', LineupController::class);
    Route::resource('instagram', InstagramController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});

// Route::get('/linkstorage', function () { $targetFolder = base_path().'/storage/app/public'; $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage'; symlink($targetFolder, $linkFolder); });

Route::get('/login', function () {
    return view('frontend.login');
});

// Route::get('/', function () {
//     return view('frontend.landing');
// });

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});

// Route::get('/lineuplist', function () {
//     return view('frontend.detail_lineup');
// });

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
