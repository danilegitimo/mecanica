@extends('layouts.app')

@section('title')
  @isset($order) Ordem ({{ $order->id }}) @else Cadastro de ordem @endif
@endsection

@section('header.title', 'Ordens de serviços')

@section('header.subtitle', 'Para ter um serviço de qualidade, é importante manter os registros no banco de dados atualizados.')

@section('header.content')
<div>
  <a href="{{ route('orders.index') }}" class="btn btn-success">Voltar</a>
</div>
@endsection

@section('content')
<div>
  <form method="POST" action="{{ isset($order) ? route('orders.update', $order->id) : route('orders.store') }} " enctype="multipart/form-data">

    @csrf @if ( isset($order) ) @method('PUT') @endif

    <div class="row">
      <div class="col">
        <div class="form-floating">
          <select name="client_id" id="client" class="form-control" placeholder="cliente">
            @forelse ($clients as $client)
              <option value="{{ $client->id }}" @selected(isset($order) && $order->client_id == $client->id)>{{ $client->name }}</option>
            @empty
              <option selected>Não há clientes cadastrados</option>
            @endforelse
          </select>
          <label for="client">Cliente</label>
          <div class="invalid-feedback">@error ('client_id') $message @enderror</div>
        </div>
      </div>

      <div class="col">
        <div class="form-floating">
          <select name="vehicle_id" id="vehicle" class="form-control" placeholder="veículo">
            @forelse ($vehicles as $vehicle)
              <option value="{{ $vehicle->id }}" @selected(isset($order) && $order->vehicle_id == $vehicle->id)>{{ $vehicle->modelo?->name }} - {{ $vehicle->placa }}</option>
            @empty
              <option selected>Não há veículos cadastrados</option>
            @endforelse
          </select>
          <label for="vehicle">Veículo</label>
          <div class="invalid-feedback">@error ('vehicle_id') $message @enderror</div>
        </div>
      </div>
    </div>

    <div class="row mb-4">

      <div class="mt-2 col">
        <label for="services" class="form-label">Serviços</label>
        <select name="services[]" size="10" id="services" class="form-control" multiple>
          @forelse ($services as $service)
            <option value="{{ $service->id }}" @selected( isset($order) && in_array($service->id, $order->services->pluck('service_id')->toArray() ) )>
              {{ $service->name }}
            </option>
          @empty
            <option>Nenhum serviço cadastrado</option>
          @endforelse
        </select>
        <div class="invalid-feedback">
          @error('services')
          {{ $message }}
          @enderror
        </div>
      </div>

      <div class="mt-2 col-12">
        <label for="parts" class="form-label">Peças</label>
        <select name="parts[]" size="10" id="parts" class="form-control" multiple>
          @forelse ($parts as $part)
            <option value="{{ $part->id }}" @selected( isset($order) && in_array($part->id, $order->parts->pluck('parts_id')->toArray() ) )>
              {{ $part->name }}
            </option>
          @empty
            <option>Não há nenhuma opção cadastrada</option>
          @endforelse
        </select>
        <div class="invalid-feedback">
          @error('parts')
          {{ $message }}
          @enderror
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