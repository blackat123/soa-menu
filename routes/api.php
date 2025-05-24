<?php

use App\Http\Controllers\MenuCategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuPackageController;
use App\Http\Controllers\MenuPackageDetailController;
use App\Http\Controllers\MenuRecipeController;
use Illuminate\Support\Facades\Route;

Route::apiResource('menu', MenuController::class);
Route::apiResource('menu-package', MenuPackageController::class);
Route::apiResource('menu-package-detail', MenuPackageDetailController::class);
Route::apiResource('menu-category', MenuCategoryController::class);
Route::apiResource('menu-recipe', MenuRecipeController::class);
