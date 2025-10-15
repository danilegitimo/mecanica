@extends('layouts.app')

@section('title')
  @isset($vehicle) Veículo ({{ $vehicle->placa }}) @else Cadastro de veículo @endif
@endsection

@section('header.title', 'Veículos')

@section('header.subtitle', 'Para ter um serviço de qualidade, é importante manter os registros no banco de dados atualizados.')

@section('header.content')
<div>
  <a href="{{ route('vehicles.index') }}" class="btn btn-success">Voltar</a>
</div>
@endsection

@section('content')
<div>
  <form
    method="POST"
    action="{{ isset($vehicle) ? route('vehicles.update', $vehicle->id) : route('vehicles.store') }} "
    enctype="multipart/form-data">

    @csrf @if ( isset($vehicle) ) @method('PUT') @endif

    <div class="row mb-3">

      <div class="col">
        <div class="form-floating">
          <input
            type="text"
            class="form-control @error('placa') is-invalid @enderror"
            id="placa"
            name="placa"
            value="{{ old('placa', $vehicle->placa ?? '') }}"
            placeholder=""
            required />
          <label for="placa" class="form-label">Placa*</label>
          <span class="form-text">A placa será verificada em banco de dados terceiros.</span>
          <div class="invalid-feedback">
            @error('placa')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="col">
        <div class="form-floating">
          <input placeholder="" type="text" class="form-control @error('renavam') is-invalid @enderror" id="renavam" name="renavam" value="{{ old('renavam', $vehicle->renavam ?? '') }}" required />
          <label for="renavam" class="form-label">Renavam*</label>
          <div class="invalid-feedback">
            @error('renavam')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="col">
        <div class="form-floating">
          <input placeholder="" type="text" class="form-control @error('proprietario') is-invalid @enderror" id="proprietario" name="proprietario" value="{{ old('proprietario', $vehicle->proprietario ?? '') }}" required />
          <label for="proprietario" class="form-label">Prioprietário*</label>
          <span class="form-text">Digite o nome completo</span>
          <div class="invalid-feedback">
            @error('proprietario')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-4">

      <div class="col">
        <div class="form-floating">
          <select name="cor" id="cor" class="form-control">
            <option value="Vermelho">Vermelho</option>
            <option value="Azul">Azul</option>
            <option value="Verde">Verde</option>
            <option value="Amarelo">Amarelo</option>
            <option value="Roxo">Roxo</option>
            <option value="Laranja">Laranja</option>
            <option value="Rosa">Rosa</option>
            <option value="Preto">Preto</option>
            <option value="Branco">Branco</option>
            <option value="Cinza">Cinza</option>
            <option value="Marrom">Marrom</option>
            <option value="Bege">Bege</option>
            <option value="Vinho">Vinho</option>
            <option value="Dourado">Dourado</option>
            <option value="Prata">Prata</option>
            <option value="Turquesa">Turquesa</option>
            <option value="Ciano">Ciano</option>
            <option value="Magenta">Magenta</option>
            <option value="Lilás">Lilás</option>
            <option value="Ameixa">Ameixa</option>
            <option value="Oliva">Oliva</option>
            <option value="Creme">Creme</option>
            <option value="Caramelo">Caramelo</option>
            <option value="Azul Marinho">Azul Marinho</option>
            <option value="Verde Musgo">Verde Musgo</option>
            <option value="Verde Água">Verde Água</option>
            <option value="Roxo Escuro">Roxo Escuro</option>
            <option value="Branco Gelo">Branco Gelo</option>
            <option value="Cinza Chumbo">Cinza Chumbo</option>
            <option value="Preto Fosco">Preto Fosco</option>
          </select>
          <label for="cor" class="form-label">Cor*</label>
          <div class="invalid-feedback">
            @error('cor')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="col">
        <div class="form-floating">
          <input placeholder="" type="text" class="form-control @error('ano') is-invalid @enderror" id="ano" name="ano" value="{{ old('ano', $vehicle->ano ?? '') }}" required />
          <label for="ano" class="form-label">Ano*</label>
          <div class="invalid-feedback">
            @error('ano')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="col">
        <div class="form-floating">
          <select name="vehicle_model_id" id="models" class="form-control @error('vehicle_model_id') is-invalid @enderror">
            @unless(isset($vehicle))
              <option value="#" selected> </option>
            @endunless
            @forelse($models as $model)
              <option value="{{ $model->id }}" {{ isset($vehicle) ? ($vehicle?->modelo?->id == $model->id ? 'selected' : '') : '' }}>{{ $model->name }}</option>
            @empty
              <option value="">***</option>
            @endforelse
          </select>
          <label for="models" class="form-label">Modelo*</label>
          <div class="invalid-feedback">
            @error('vehicle_model_id')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>
      <div class="col">
        <div class="form-floating">
          <select name="client_id" id="responsible" class="form-control @error('client_id') is-invalid @enderror">
            @unless(isset($vehicle))
              <option value="#" selected> </option>
            @endunless
            @forelse($clients as $client)
              <option
                value="{{ $client->id }}"
                {{ isset($vehicle) ? ($vehicle?->cliente?->id == $client->id ? 'selected' : '') : '' }}
                >{{ $client->name }}</option>
            @empty
              <option value="#" selected>----</option>
            @endforelse
          </select>
          <label for="responsible" class="form-label">Responsável</label>
          <div class="invalid-feedback">
            @error('client_id')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

    </div>

    <div class="row mt-4 d-flex justify-content-end">
      <div class="col-2">
        <button type="submit" class="container-fluid p-2 btn btn-success">@isset($vehicle) Salvar @else Cadastrar @endisset</button>
      </div>
    </div>
    
  </form>
</div>
@endsection