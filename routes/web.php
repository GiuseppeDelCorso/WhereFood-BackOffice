<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController; //<---- Import del controller precedentemente creato!
use App\Http\Controllers\Admin\RestaurantController; // <---- Importare il controller da usare!!
use App\Http\Controllers\Admin\CategoryController; // <---- Importare il controller da usare!!
use App\Http\Controllers\Admin\OrderController; // <---- Importare il controller da usare!!
use App\Http\Controllers\Admin\TypeController; // <---- Importare il controller da usare!!
use App\Http\Controllers\Admin\ProductController; // <---- Importare il controller da usare!!
/* ... */

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])
    ->prefix('admin') //definisce il prefisso "admin/" per le rotte di questo gruppo
    ->name('admin.') //definisce il pattern con cui generare i nomi delle rotte cioè "admin.qualcosa"
    ->group(function () {

        //Siamo nel gruppo quindi:
        // - il percorso "/" diventa "admin/"
        // - il nome della rotta ->name("dashboard") diventa ->name("admin.dashboard")
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('restaurants', RestaurantController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
        Route::resource('orders', OrderController::class);
        Route::resource('types', TypeController::class);
    });

require __DIR__ . '/auth.php';
