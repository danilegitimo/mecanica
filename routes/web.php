<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {

  Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

  Route::resource('vehicles', DashboardController::class)->names('vehicles');

});