<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VehicleController extends Controller
{

  public function index()
  {
    $vehicles = Vehicle::orderBy('created_at', 'desc')->paginate(10);
    return view('vehicles.index', compact('vehicles'));
  }

  public function create()
  {
    return view('vehicles.form', ['vehicle' => null]);
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      "placa"      => "required|min:3|max:255|unique:vehicles,placa",
      "renavam"     => "required|min:3|max:255|unique:vehicles,renavam",
      "proprietario" => "required|min:4",
      "cor"       => "required|min:3",
      "ano"        => "required|string|min:4|max:4",
    ]);

    $vehicle = Vehicle::create($validated);

    if ($vehicle) {
      return redirect()->route('vehicles.index')
        ->with('success', 'O novo veículo foi criado!');
    } else {
      return redirect()->route('vehicles.index')
        ->with('error', 'O novo veículo não foi criado!');
    }
  }

  public function edit(string $id)
  {
    $vehicle = Vehicle::findOrFail($id);
    return view('vehicles.form', compact('vehicle'));
  }

  public function update(Request $request, string $id)
  {

    $vehicle = Vehicle::findOrFail($id);

    $validated = $request->validate([
      "placa"      => "required|min:3|max:255|unique:vehicles,placa",
      "renavam"     => "required|min:3|max:255|unique:vehicles,renavam",
      "proprietario" => "required|min:4",
      "cor"       => "required|min:3",
      "ano"        => "required|string|min:4|max:4",
    ]);

    $vehicle->update($validated);

    if ($vehicle) {
      return redirect()->route('vehicles.index')
        ->with('success', "O veículo{$vehicle->placa} foi atualizado!");
    } else {
      return redirect()->route('vehicles.index')
        ->with('error', "Não foi possível atualizar o veículo!");
    }
  }

  public function destroy(string $id)
  {
    $vehicle = Vehicle::findOrFail($id);
    $vehicle->delete();
    return redirect()->route('vehicles.index')
      ->with('success', "O veículo {$vehicle->placa} foi deletado!");
  }
}
