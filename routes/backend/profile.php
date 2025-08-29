<?php

use App\Http\Controllers\Backend\Profile\ProfileIndexController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', ProfileIndexController::class)->name('profile.index');
});
