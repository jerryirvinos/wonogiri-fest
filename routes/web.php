<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.landing');
});

Route::get('/admin/user', function () {
    return view('user.index');
});

Route::get('/admin/ticket', function () {
    return view('ticket.index');
});
