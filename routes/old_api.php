<?php

use App\Http\Controllers\Api\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api2\WebController;
use App\Http\Controllers\Api\FoodController;
use App\Http\Controllers\Api\TableController;
use App\Http\Controllers\Api\RestaurantController;

Route::prefix('v1/')->group(function () { 
        Route::get('foods', [FoodController::class, 'index']);  
        Route::get('tables', [TableController::class, 'index']); 
        Route::get('details', [RestaurantController::class, 'index']);
        Route::get('orders/table/{table}', [OrderController::class, 'index']);
        Route::post('orders', [OrderController::class, 'store']);
        Route::post('take-bill', [OrderController::class, 'takeBill']);
    });

    
    

Route::prefix('v2/')->group(function () {
        Route::get('categories', [WebController::class, 'categories']);
        Route::get('foods', [WebController::class, 'foods']);
});
