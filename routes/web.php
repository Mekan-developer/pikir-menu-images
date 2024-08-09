<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\Auth\LoginController;
use App\Http\Controllers\WebController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\IngredientController;
use App\Http\Controllers\Panel\FoodController;
use App\Http\Controllers\Panel\FoodSizeController;
use App\Http\Controllers\Panel\FoodIngredientController;
use App\Http\Controllers\Panel\HallController;
use App\Http\Controllers\Panel\TableController;
use App\Http\Controllers\Panel\RestaurantController;
use App\Http\Controllers\Panel\ServiceController;
use App\Http\Controllers\Panel\PasswordController;
use App\Http\Controllers\Panel\OrderController;



// Route::view('/','down.down');

Route::get('/', [WebController::class, 'welcome'])->name('welcome');
Route::get('/catalog', [WebController::class, 'welcome'])->name('welcome1');
Route::get('/items', [WebController::class, 'welcome'])->name('welcome2');
Route::get('/items/{id}', [WebController::class, 'welcome'])->name('welcome1');

Route::middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->prefix(LaravelLocalization::setLocale())->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    Route::middleware('auth')->group(function () {
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
        Route::prefix('panel')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');
            Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
            Route::patch('profile', [DashboardController::class, 'profileUpdate'])->name('profile.update');

            Route::get('categories/orders', [CategoryController::class, 'order'])->name('categories.order');
            Route::patch('categories/orders', [CategoryController::class, 'orderUpdate'])->name('categories.order.update');
            Route::resource('categories', CategoryController::class);
            Route::resource('ingredients', IngredientController::class);
            Route::get('foods/orders', [FoodController::class, 'order'])->name('foods.order');
            Route::patch('foods/orders', [FoodController::class, 'orderUpdate'])->name('foods.order.update');
            Route::resource('foods', FoodController::class);

            Route::get('foods/{food}/sizes/create', [FoodSizeController::class, 'create'])->name('foods.sizes.create');
            Route::post('foods/{food}/sizes', [FoodSizeController::class, 'store'])->name('foods.sizes.store');
            Route::get('foods/sizes/{size}/edit', [FoodSizeController::class, 'edit'])->name('foods.sizes.edit');
            Route::patch('foods/sizes/{size}', [FoodSizeController::class, 'update'])->name('foods.sizes.update');
            Route::delete('foods/sizes/{size}', [FoodSizeController::class, 'destroy'])->name('foods.sizes.destroy');

            Route::get('foods/{food}/ingredients/create', [FoodIngredientController::class, 'create'])->name('foods.ingredients.create');
            Route::post('foods/{food}/ingredients', [FoodIngredientController::class, 'store'])->name('foods.ingredients.store');
            Route::delete('foods/ingredients/{ingredient}', [FoodIngredientController::class, 'destroy'])->name('foods.ingredients.destroy');

            Route::resource('halls', HallController::class);
            Route::patch('halls/{hall}/toggle', [HallController::class, 'toggle'])->name('halls.toggle');

            Route::resource('tables', TableController::class);
            Route::patch('tables/{table}/toggle', [TableController::class, 'toggle'])->name('tables.toggle');

            Route::get('restaurant', [RestaurantController::class, 'index'])->name('restaurant');

            Route::resource('services', ServiceController::class)->except('index', 'show', 'destroy');

            Route::get('passwords/create', [PasswordController::class, 'create'])->name('passwords.create');
            Route::post('passwords', [PasswordController::class, 'store'])->name('passwords.store');
            Route::delete('passwords', [PasswordController::class, 'destroy'])->name('passwords.destroy');

            Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
            Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');
            Route::patch('orders/{order}', [OrderController::class, 'update'])->name('orders.update');
        });
    });

});

