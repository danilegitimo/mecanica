@extends('layouts.app')

@section('title')
  @isset($supplier) Fornecedor ({{ $supplier->cnpj }}) @else Cadastro de fornecedor @endif
@endsection

@section('header.title', 'Fornecedores')

@section('header.subtitle', 'Para ter um serviço de qualidade, é importante manter os registros no banco de dados atualizados.')

@section('header.content')
<div>
  <a href="{{ route('suppliers.index') }}" class="btn btn-success">Voltar</a>
</div>
@endsection

@section('content')
<div>
  <form method="POST" action="{{ isset($supplier) ? route('suppliers.update', $supplier->id) : route('suppliers.store') }} " enctype="multipart/form-data">

    @csrf @if ( isset($supplier) ) @method('PUT') @endif

    <div class="row mb-2">

      <div class="col">
        <div class="form-floating">
          <input placeholder="" type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $supplier->name ?? '') }}" required />
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
          <input placeholder="" type="text" class="form-control @error('cnpj') is-invalid @enderror" id="cnpj" name="cnpj" value="{{ old('cnpj', $supplier->cnpj ?? '') }}" required />
          <label for="cnpj" class="form-label">CNPJ</label>
          <div class="invalid-feedback">
            @error('cnpj')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

        <div class="col">
          <div class="form-floating">
            <input placeholder="" type="text" class="form-control @error('contato') is-invalid @enderror" id="contato" name="contato" value="{{ old('contato', $supplier->contato ?? '') }}" required />
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
            <input placeholder="" type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{ old('endereco', $supplier->endereco ?? '') }}" required />
            <label for="endereco" class="form-label">Endereco</label>
            <div class="invalid-feedback">
              @error('endereco')
              {{ $message }}
              @enderror
            </div>
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