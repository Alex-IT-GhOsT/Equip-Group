<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PriceController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    Route::apiResources([
        'group' => GroupController::class,
        'product' => ProductController::class,
        'price' => PriceController::class,
    ]);
});
