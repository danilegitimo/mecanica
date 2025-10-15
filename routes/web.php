<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PartsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\VehicleController;
use App\Models\Client;
use App\Models\Order;
use App\Models\Parts;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {

  Route::get('/', function () {

    $orders   = Order::all();
    $vehicles = Vehicle::all()->count();
    $clients  = Client::all()->count();
    $parts    = Parts::all()->count();

    $total = 0;

    $orders->each(function ($order) use ($total) {
      $total += $order->services()->join('services', 'order_services.service_id', '=', 'services.id')->sum('services.amount');
    });

    return view("index", compact(
      'parts', 'vehicles', 'orders', 'clients', 'total'
    ));

  })->name("dashboard");

  Route::resource('vehicles', VehicleController::class);
  Route::resource('services', ServiceController::class);
  Route::resource('orders', OrderController::class);
  Route::resource('services', ServiceController::class);
  Route::resource('parts', PartsController::class);
  Route::resource('suppliers', SupplierController::class);
  Route::resource('clients', ClientController::class);

});