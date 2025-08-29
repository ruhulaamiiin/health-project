<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

require __DIR__ . '/guest.php';
require __DIR__ . '/backend/dashboard.php';
require __DIR__ . '/backend/profile.php';
require __DIR__ . '/backend/categories.php';
