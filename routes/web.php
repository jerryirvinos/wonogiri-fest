<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.landing');
});

Route::get('/admin', function () {
    return view('templates.master');
});
