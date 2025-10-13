<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\VehiclesController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {

  Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

  Route::resource('vehicles', VehiclesController::class)->names('vehicles');
  Route::resource('example', ExampleController::class)->names('examples');

});