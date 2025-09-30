<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PartsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {

  Route::get('/', function () {
    return view("index");
  })->name("dashboard");

  Route::resource('vehicles', VehicleController::class);
  Route::resource('clients', UserController::class);
  Route::resource('services', ServiceController::class);
  Route::resource('orders', OrderController::class);
  Route::resource('services', ServiceController::class);
  Route::resource('parts', PartsController::class);
  Route::resource('suppliers', SupplierController::class);

});