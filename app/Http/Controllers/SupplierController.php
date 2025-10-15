<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrUpdateSupplier;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

  public function index(Request $request) {
    $suppliers = Supplier::orderBy('created_at', 'desc')
      ->when($request->search, function ($query) use ($request) {
        $query->where('name', 'LIKE', "%{$request->search}%");
        $query->orWhere('cnpj', 'LIKE', "%{$request->search}%");
        $query->orWhere('contato', 'LIKE', "%{$request->search}%");
        $query->orWhere('endereco', 'LIKE', "%{$request->search}%");
      })
      ->paginate(10);
    return view('suppliers.index', compact('suppliers'));
  }

  public function create() {
    return view('suppliers.form', ['supplier' => null]);
  }

  public function store(CreateOrUpdateSupplier $request) {
    if ( $supplier = Supplier::create($request->validated()) ) {
      return redirect()->route('suppliers.index')
        ->with('success', 'O novo fornecedor foi criado!');
    } else {
      return redirect()->route('suppliers.index')
        ->with('error', 'O novo fornecedor não foi criado!');
    }
  }

  public function edit(Supplier $supplier) {
    return view('suppliers.form', compact('supplier'));
  }

  public function update(CreateOrUpdateSupplier $request, Supplier $supplier) {
    if ($supplier->update($request->validated())) {
      return redirect()->route('suppliers.index')
        ->with('success', "O fornecedor {$supplier->name} foi atualizado!");
    } else {
      return redirect()->route('suppliers.index')
        ->with('error', "Não foi possível atualizar o fornecedor!");
    }
  }

  public function destroy(Supplier $supplier) {
    $supplier->delete();
    return redirect()->route('suppliers.index')
      ->with('success', "O fornecedor {$supplier->name} foi deletado!");
  }
}
