<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrUpdateParts;
use App\Models\Parts;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PartsController extends Controller{

  public function index(Request $request) {
    $parts = Parts::orderBy('created_at', 'desc')
      ->with('fornecedor')
      ->when($request->search, function ($query) use ($request) {
        $query->where('name', 'LIKE', "%{$request->search}%");
      })
      ->paginate(10);
    return view('parts.index', compact('parts'));
  }

  public function create() {
    return view('parts.form', ['part' => null, 'suppliers' => Supplier::all()]);
  }

  public function store(CreateOrUpdateParts $request) {
    if ( $part = Parts::create($request->validated()) ) {
      return redirect()->route('parts.index')
        ->with('success', "Uma peça {$part->name} foi criada");
    } else {
      return redirect()->route('parts.index')
        ->with('error', 'Não foi possível criar!');
    }
  }

  public function edit(Parts $part) {
    $suppliers = Supplier::all();
    return view('parts.form', compact('part', 'suppliers'));
  }

  public function update(CreateOrUpdateParts $request, Parts $part) {
    if ($part->update($request->validated())) {
      return redirect()->route('parts.index')
        ->with('success', "A peça {$part->name} foi atualizada!");
    } else {
      return redirect()->route('parts.index')
        ->with('error', "Não foi possível atualizar a peça!");
    }
  }

  public function destroy(Parts $part) {
    $part->delete();
    return redirect()->route('parts.index')
      ->with('success', "A peça {$part->name} foi deletada!");
  }

}
