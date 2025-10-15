@extends('layouts.app')

@section('title')
  @isset($parts) Peça ({{ $parts->name }}) @else Cadastro de peça @endif
@endsection

@section('header.title', 'Peças')

@section('header.subtitle', 'Para ter um serviço de qualidade, é importante manter os registros no banco de dados atualizados.')

@section('header.content')
<div>
  <a href="{{ route('parts.index') }}" class="btn btn-success">Voltar</a>
</div>
@endsection

@section('content')
<div>
  <form method="POST" action="{{ isset($part) ? route('parts.update', $part->id) : route('parts.store') }} " enctype="multipart/form-data">

    @csrf @if ( isset($part) ) @method('PUT') @endif

    <div class="row mb-2">

      <div class="col">
        <div class="form-floating">
          <input placeholder="#" type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $part->name ?? '') }}" required />
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
          <input placeholder="#" type="text" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity', $part->quantity ?? '') }}" required />
          <label for="quantity" class="form-label">Quantidade</label>
          <div class="invalid-feedback">
            @error('quantity')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="col">
        <div class="form-floating">
          <select name="supplier_id" id="suppliers" class="form-control">
            @forelse ($suppliers as $supplier)
              <option value="{{ $supplier->id }}" @selected(isset($part->supplier_id) && $part->supplier_id == $supplier->id)>{{ $supplier->name }}</option>
            @empty
              <option value="#">---</option>
            @endforelse
          </select>
          <label for="suppliers" class="form-label">Fornecedor</label>
          <div class="invalid-feedback">
            @error('supplier_id')
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