<?php

use App\Http\Controllers\Backend\Dashboard\DashboardIndexController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', DashboardIndexController::class)->name('dashboard');

    // Additional routes for the dashboard can be added here
});