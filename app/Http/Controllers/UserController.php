<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {

  public function index(Request $request) {
    $clients = User::orderBy('created_at', 'desc')->whereNot('id', $request->user()->id)->paginate(10);
    return view('clients.index', compact('clients'));
  }

  public function create() {
    return view('clients.form', ['user' => null]);
  }

  public function store(Request $request) {
    $validated = $request->validate([
      "name" => "required|min:3|max:255",
      "contact" => "required|min:3|max:255",
      "email" => "required|email",
    ]);

    $validated['password'] = "**";

    $user = User::create($validated);

    if ($user) {
      return redirect()->route('clients.index')
        ->with('success', 'O novo cliente foi criado!');
    } else {
      return redirect()->route('clients.index')
        ->with('error', 'O novo cliente não foi criado!');
    }
  }

  public function edit(User $user) {
    return view('clients.form', compact('user'));
  }

  public function update(Request $request, User $user) {

     $validated = $request->validate([
      "name" => "required|min:3|max:255",
      "contact" => "required|min:3|max:255"
    ]);

    $user->update($validated);

    if ($user) {
      return redirect()->route('clients.index')
        ->with('success', "O cliente {$user->name} foi atualizado!");
    } else {
      return redirect()->route('clients.index')
        ->with('error', "Não foi possível atualizar o cliente!");
    }
  }

  public function destroy(string $id) {
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->route('clients.index')
      ->with('success', "O cliente {$user->name} foi deletado!");
  }

}
