@extends('layouts.app')

@section('title')
  @isset($client) Cliente ({{ $client->name }}) @else Cadastro de cliente @endif
@endsection

@section('header.title', 'Clientes')

@section('header.subtitle', 'Para ter um serviço de qualidade, é importante manter os registros no banco de dados atualizados.')

@section('header.content')
<div>
  <a href="{{ route('clients.index') }}" class="btn btn-success">Voltar</a>
</div>
@endsection

@section('content')
<div>
  <form method="POST" action="{{ isset($client) ? route('clients.update', $client->id) : route('clients.store') }} " enctype="multipart/form-data">

    @csrf @if ( isset($client) ) @method('PUT') @endif

    <div class="row mb-2">

      <div class="col">
        <div class="form-floating">
          <input placeholder="" type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $client->name ?? '') }}" required />
          <label for="name" class="form-label">Nome</label>
          <div class="invalid-feedback">
            @error('name')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="col">
        <div class="form-floating">
          <input placeholder="" type="text" class="form-control @error('contato') is-invalid @enderror" id="contato" name="contato" value="{{ old('contato', $client->contato ?? '') }}" required />
          <label for="contato" class="form-label">Contato</label>
          <div class="invalid-feedback">
            @error('contato')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="col">
        <div class="form-floating">
          <input placeholder="" type="text" class="form-control @error('cpf') is-invalid @enderror" id="cpf" name="cpf" value="{{ old('cpf', $client->cpf ?? '') }}" required />
          <label for="cpf" class="form-label">CPF</label>
          <div class="invalid-feedback">
            @error('cpf')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="col">
        <div class="form-floating">
          <input placeholder="" type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{ old('endereco', $client->endereco ?? '') }}" required />
          <label for="endereco" class="form-label">Endereço</label>
          <div class="invalid-feedback">
            @error('endereco')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

    </div>

    <div class="row mt-4 d-flex justify-content-end">
      <div class="col-2">
        <button type="submit" class="container-fluid p-2 btn btn-success">Salvar</button>
      </div>
    </div>

  </form>
</div>
@endsection