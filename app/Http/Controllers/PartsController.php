<?php

namespace App\Http\Controllers;

use App\Models\Parts;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PartsController extends Controller
{

  public function index()
  {
    $parts = Parts::orderBy('created_at', 'desc')->paginate(10);
    return view('parts.index', compact('parts'));
  }

  public function create()
  {
    return view('parts.form', ['part' => null, 'suppliers' => Supplier::all()]);
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      "name"      => "required|min:3|max:255",
      "supplier_id" => "required|exists:suppliers,id",
      "quantity" => "required|numeric|min:0",
    ]);

    $part = Parts::create($validated);

    if ($part) {
      return redirect()->route('parts.index')
        ->with('success', 'Uma nova peça foi criada!');
    } else {
      return redirect()->route('parts.index')
        ->with('error', 'Não foi possível criar!');
    }
  }

  public function edit(Parts $part)
  {
    $suppliers = Supplier::all();
    return view('parts.form', compact('part', 'suppliers'));
  }

  public function update(Request $request, Parts $part)
  {

    $validated = $request->validate([
      "name"      => "required|min:3|max:255",
      "supplier_id" => "required|exists:suppliers,id",
      "quantity" => "required|numeric|min:0"
    ]);

    $part->update($validated);

    if ($part) {
      return redirect()->route('parts.index')
        ->with('success', "A peça {$part->name} foi atualizada!");
    } else {
      return redirect()->route('parts.index')
        ->with('error', "Não foi possível atualizar a peça!");
    }
  }

  public function destroy(Parts $part)
  {
    $part->delete();
    return redirect()->route('parts.index')
      ->with('success', "A peça {$part->name} foi deletada!");
  }
}
