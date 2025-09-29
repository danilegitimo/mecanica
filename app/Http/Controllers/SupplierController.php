<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SupplierController extends Controller
{

  public function index()
  {
    $suppliers = Supplier::orderBy('created_at', 'desc')->paginate(10);
    return view('suppliers.index', compact('suppliers'));
  }

  public function create()
  {
    return view('suppliers.form', ['supplier' => null]);
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      "name"      => "required|min:3|max:255",
      "cnpj"     => "required|min:3|max:255|unique:suppliers,cnpj",
      "contato" => "required|min:4",
    ]);

    $supplier = Supplier::create($validated);

    if ($supplier) {
      return redirect()->route('suppliers.index')
        ->with('success', 'O novo fornecedor foi criado!');
    } else {
      return redirect()->route('suppliers.index')
        ->with('error', 'O novo fornecedor não foi criado!');
    }
  }

  public function edit(string $id)
  {
    $supplier = Supplier::findOrFail($id);
    return view('suppliers.form', compact('supplier'));
  }

  public function update(Request $request, Supplier $supplier)
  {

   $validated = $request->validate([
      "name"      => "required|min:3|max:255",
      "cnpj"     => "required|min:3|max:255|unique:suppliers,cnpj",
      "contato" => "required|min:4",
    ]);

    $supplier->update($validated);

    if ($supplier) {
      return redirect()->route('suppliers.index')
        ->with('success', "O fornecedor {$supplier->name} foi atualizado!");
    } else {
      return redirect()->route('suppliers.index')
        ->with('error', "Não foi possível atualizar o fornecedor!");
    }
  }

  public function destroy(Supplier $supplier)
  {
    $supplier->delete();
    return redirect()->route('suppliers.index')
      ->with('success', "O fornecedor {$supplier->name} foi deletado!");
  }
}
