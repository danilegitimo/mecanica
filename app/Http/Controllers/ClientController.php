<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrUpdateClient;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller {

  public function index(Request $request) {
    $clients = Client::orderBy('id', 'desc')
    ->when($request->search, function ($query) use ($request) {
        $query->where('name', 'LIKE', "%{$request->search}%");
        $query->orWhere('cpf', 'LIKE', "%{$request->search}%");
        $query->orWhere('endereco', 'LIKE', "%{$request->search}%");
        $query->orWhere('contato', 'LIKE', "%{$request->search}%");
      })
    ->paginate(10);
    return view('clients.index', compact('clients'));
  }

  public function create() {
    return view('clients.form', ['client' => null]);
  }

  public function store(CreateOrUpdateClient $request) {
    if ( Client::create($request->validated()) ) {
      return redirect()->route('clients.index')
        ->with('success', 'O novo cliente foi criado!');
    } else {
      return redirect()->route('clients.index')
        ->with('error', 'O novo cliente não foi criado!');
    }
  }

  public function edit(Client $client) {
    return view('clients.form', compact('client'));
  }

  public function update(CreateOrUpdateClient $request, Client $client) {
    if ($client->update($request->validated())) {
      return redirect()->route('clients.index')
        ->with('success', "O cliente {$client->name} foi atualizado!");
    } else {
      return redirect()->route('clients.index')
        ->with('error', "Não foi possível atualizar o cliente!");
    }
  }

  public function destroy(Client $client) {
    $client->delete();
    return redirect()->route('clients.index')
      ->with('success', "O cliente {$client->name} foi deletado!");
  }
}
