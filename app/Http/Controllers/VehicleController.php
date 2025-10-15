<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrUpdateVehicle;
use App\Models\Client;
use App\Models\Vehicle;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class VehicleController extends Controller {

  public function index(Request $request) {
    $vehicles = Vehicle::orderBy('id', 'desc')
      ->with('modelo')
      ->when($request->search, function ($query) use ($request) {
        $query->where('placa', 'LIKE', "%{$request->search}%");
        $query->orWhere('proprietario', 'LIKE', "%{$request->search}%");
      })
      ->paginate(10);
    return view('vehicles.index', compact('vehicles'));
  }

  public function create() {
    return view('vehicles.form', [
      'vehicle' => null,
      'models'  => VehicleModel::all(),
      'clients' => Client::all()
    ]);
  }

  public function store(CreateOrUpdateVehicle $request) {
    if ( $vehicle = Vehicle::create($request->validated()) ) {
      return redirect()->route('vehicles.index')
        ->with('success', "O veículo {$vehicle->placa} foi criado!");
    } else {
      return redirect()->route('vehicles.index')
        ->with('error', "Não foi possível criar {$vehicle->placa}!");
    }
  }

  public function edit(Vehicle $vehicle) {
    $vehicle->load('modelo', 'cliente');
    $models = VehicleModel::all(); $clients = Client::all();
    return view('vehicles.form', compact('vehicle', 'models', 'clients'));
  }

  public function update(CreateOrUpdateVehicle $request, Vehicle $vehicle) {
    if ($vehicle->update($request->validated())) {
      return redirect()->route('vehicles.index')
        ->with('success', "O veículo {$vehicle->placa} foi atualizado!");
    } else {
      return redirect()->route('vehicles.index')
        ->with('error', "Não foi possível atualizar o veículo!");
    }
  }

  public function destroy(Vehicle $vehicle) {
    $vehicle->delete();
    return redirect()->route('vehicles.index')
      ->with('success', "O veículo {$vehicle->placa} foi deletado!");
  }
}
