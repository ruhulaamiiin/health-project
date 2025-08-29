<?php

use App\Http\Controllers\Backend\Auth\SignInController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::view('/sign-in', 'auth.sign-in')->name('login');
    Route::post('/sign-in', SignInController::class)->name('sign-in');
});
