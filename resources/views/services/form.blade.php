@extends('layouts.app')

@section('title')
  @isset($service) Serviço ({{ $service->name }}) @else Cadastro de serviço @endif
@endsection

@section('header.title', 'Serviços')

@section('header.subtitle', 'Para ter um serviço de qualidade, é importante manter os registros no banco de dados atualizados.')

@section('header.content')
<div>
  <a href="{{ route('services.index') }}" class="btn btn-success">Voltar</a>
</div>
@endsection

@section('content')
<div>
  <form method="POST" action="{{ isset($service) ? route('services.update', $service->id) : route('services.store') }} " enctype="multipart/form-data">

    @csrf @if ( isset($service) ) @method('PUT') @endif

    <div class="row mb-2">

      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $service->name ?? '') }}" required />
          <label for="name" class="form-label">Nome</label>
          <div class="invalid-feedback">
            @error('name')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount" value="{{ old('amount', $service->amount ?? '') }}" required />
          <label for="amount" class="form-label">Valor</label>
          <div class="invalid-feedback">
            @error('amount')
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