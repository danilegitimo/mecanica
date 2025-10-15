<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrUpdateOrder;
use App\Models\Client;
use App\Models\Order;
use App\Models\OrderPart;
use App\Models\OrderService;
use App\Models\Parts;
use App\Models\Service;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class OrderController extends Controller {

  public function index(Request $request) {
    $orders = Order::orderBy('created_at', 'desc')
      ->with(
        'vehicle',
        'vehicle.modelo',
        'services',
        'services.service'
      )
      ->when($request->search, function ($query) use ($request) {
          
        })
      ->paginate(10);
    return view('orders.index', compact('orders'));
  }

  public function create() {
    return view('orders.form', [
      'order'    => null, 
      'services' => Service::all(),
      'vehicles' => Vehicle::with('modelo')->get(),
      'parts'    => Parts::where('quantity', '>', '0')->get(),
      'clients'  => Client::all(),
    ]);
  }

  public function store(CreateOrUpdateOrder $request) {
 
    $order = Order::create([
      "vehicle_id" => $request->vehicle_id,
      "client_id"  => $request->client_id
    ]);

    foreach ($request->services as $service) {
      OrderService::create([
        'order_id'   => $order->id,
        'service_id' => $service
      ]);
    }

    if ( $request->has('parts') ) {
      foreach ($request->parts as $part) {

        $mPart = Parts::findOrFail($part);

        OrderPart::create([
          'order_id' => $order->id,
          'parts_id' => $part
        ]);

        $mPart->quantity = $mPart->quantity - 1;
        $mPart->save();
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

  public function edit(Order $order) {
    
    $order->load(
      'vehicle',
      'vehicle.modelo',
      'services',
      'services.service',
      'parts'
    );

    return view('orders.form', [
      'order'    => $order, 
      'services' => Service::all(),
      'vehicles' => Vehicle::with('modelo')->get(),
      'parts'    => Parts::where('quantity', '>', '0')->get(),
      'clients'  => Client::all(),
    ]);
  }

  public function update(CreateOrUpdateOrder $request, Order $order) {


    $order->update($request->safe()->only([
      'vehicle_id',
      'client_id'
    ]));

    if ( $request->has('services') ) {
      $order->services()->delete();

      foreach ($request->services as $serviceId) {
        $order->services()->create([
          'service_id' => $serviceId
        ]);
      }

    }

    if ( $request->has('parts') ) {
      // $order->parts()->delete();

      // foreach ($request->parts as $part) {
      //   $order->parts()->create([
      //     'parts_id' => $part
      //   ]);
      // }

      // $mPart = Parts::findOrFail($part);
      // $mPart->quantity = $mPart->quantity - 1;
      // $mPart->save();
      $order->parts->each(function ($part) {
        $part->part->quantity += 1;
        $part->part->save();
      });

    }

    if ($order) {
      return redirect()->route('orders.index')
        ->with('success', "A ordem de serviço {$order->id} foi atualizada!");
    } else {
      return redirect()->route('orders.index')
        ->with('error', "Não foi possível atualizar a ordem de serviço!");
    }
  }

  public function destroy(Order $order) {
    $order->delete();
    return redirect()->route('orders.index')
      ->with('success', "A ordem de serviço {$order->id} foi deletada!");
  }
}
