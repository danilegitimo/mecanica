<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ServiceController extends Controller
{

  public function index()
  {
    $services = Service::orderBy('created_at', 'desc')->paginate(10);
    return view('services.index', compact('services'));
  }

  public function create()
  {
    return view('services.form', ['service' => null]);
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      "name"      => "required|min:3|max:255",
      "amount"     => "required|integer|min:0"
    ]);

    $service = Service::create($validated);

    if ($service) {
      return redirect()->route('services.index')
        ->with('success', 'O novo serviço foi criado!');
    } else {
      return redirect()->route('services.index')
        ->with('error', 'O novo serviço não foi criado!');
    }
  }

  public function edit(string $id)
  {
    $service = Service::findOrFail($id);
    return view('services.form', compact('service'));
  }

  public function update(Request $request, Service $service)
  {

    $validated = $request->validate([
      "name"      => "required|min:3|max:255",
      "amount"     => "required|integer|min:0"
    ]);

    $service->update($validated);

    if ($service) {
      return redirect()->route('services.index')
        ->with('success', "O serviço {$service->name} foi atualizado!");
    } else {
      return redirect()->route('services.index')
        ->with('error', "Não foi possível atualizar o serviço!");
    }
  }

  public function destroy(Service $service)
  {
    $service->delete();
    return redirect()->route('services.index')
      ->with('success', "O serviço {$service->name} foi deletado!");
  }
}
