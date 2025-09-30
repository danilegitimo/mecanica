<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderPart;
use App\Models\OrderService;
use App\Models\Parts;
use App\Models\Service;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OrderController extends Controller
{

  public function index()
  {
    $orders = Order::orderBy('created_at', 'desc')->paginate(10);
    return view('orders.index', compact('orders'));
  }

  public function create()
  {

    $clients  = User::all();
    $services = Service::all();
    $vehicles = Vehicle::all();
    $parts    = Parts::all();

    return view('orders.form', [
      'order'    => null, 
      'services' => $services,
      'vehicles' => $vehicles,
      'parts'    => $parts,
      'clients'  => $clients
    ]);
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      "vehicle_id" => ["required"],
      "client_id"  => ["required"],
      "services" => ["required", "array"],
      "parts" => ["nullable", "array"]
    ]);

    $order = Order::create([
      "vehicle_id" => $request->vehicle_id,
      "user_id"    => $request->client_id
    ]);

    foreach ($request->services as $service) {
      OrderService::create([
        'order_id'   => $order->id,
        'service_id' => $service
      ]);
    }

    if ( $request->has('parts') ) {
      foreach ($request->parts as $part) {
        OrderPart::create([
          'order_id' => $order->id,
          'parts_id' => $part
        ]);
      }
    }

    if ($order) {
      return redirect()->route('orders.index')
        ->with('success', 'Uma nova ordem foi criado!');
    } else {
      return redirect()->route('orders.index')
        ->with('error', 'Uma nova ordem não foi criado!');
    }
  }

  public function edit(Order $order)
  {

    $clients  = User::all();
    $services = Service::all();
    $vehicles = Vehicle::all();
    $parts    = Parts::all();

    return view('orders.form', compact(
      'order', 'services', 'vehicles', 'parts', 'clients'
    ));
  }

  public function update(Request $request, Order $order)
  {

    $validated = $request->validate();

    $order->update($validated);

    if ($order) {
      return redirect()->route('orders.index')
        ->with('success', "A ordem de serviço {$order->id} foi atualizada!");
    } else {
      return redirect()->route('orders.index')
        ->with('error', "Não foi possível atualizar a ordem de serviço!");
    }
  }

  public function destroy(Order $order)
  {
    $order->delete();
    return redirect()->route('orders.index')
      ->with('success', "A ordem de serviço {$order->id} foi deletada!");
  }
}
