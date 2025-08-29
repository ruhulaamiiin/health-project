<?php

use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Backend\Category\CategoryIndexController;
use App\Http\Controllers\Backend\Category\CreateCategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/categories', CategoryIndexController::class)->name('category');
    Route::post('/categories/create-category', CreateCategoryController::class)->name('categories.store');
});
