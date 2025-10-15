@extends('layouts.app')

@section('title', 'Ordens de Serviços')

@section('header.title', 'Ordens de serviços')

@section('header.subtitle', 'Todas as ordens cadastradas e disponíveis para consulta no banco de dados.')

@section('header.content')
<div>
  <a href="{{ route('orders.create') }}" class="btn btn-success">Cadastrar</a>
</div>
@endsection

@section('content')
<div>
  @if ( $orders->isNotEmpty() )
  <div class="search">
    <form action="{{ route('orders.index') }}" class="d-flex">
      <input name="search" type="search" class="form-control me-2" placeholder="Pesquisar..." value="{{ Request::has('search') ? Request::input('search') : '' }}" />
      <button class="btn btn-success">Pesquisar</button>
    </form>
  </div>
  <table class="default-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Veículo</th>
        <th>Serviços</th>
        <th>Peças</th>
        <th>Total</th>
        <th>Criada</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
      <tr>
        <td>{{ $order->id }}</td>
        <td>
          <p class="m-0 p-0" style="font-size: 14px;">{{ $order->vehicle->modelo->manufacturer }}/{{ $order->vehicle->modelo->name }}</p>
          <p class="m-0 p-0 fs-5 fw-bolder">{{ $order->vehicle->placa }}</p>
        </td>
        <td>
          @forelse ($order->services as $service)
            <p class="m-1 d-block"
              style="font-size: 12px;background-color: rgb(240, 240, 240);border-radius: 100px;padding:02px;padding-left: 10px;"
            >{{ $service->service->name }}</p>
          @empty
            <p>Nenhum serviço contratado</p>
          @endforelse
        </td>
        <td>
          @forelse ($order->parts as $part)
            <p class="m-1 d-block"
              style="font-size: 12px;background-color: rgb(240, 240, 240);border-radius: 100px;padding:02px;padding-left: 10px;"
            >{{ $part->part->name }}</p>
          @empty
            <p>Nenhuma peça será trocada</p>
          @endforelse
        </td>
        <td>
          R$ {{ number_format($order->services()->join('services', 'order_services.service_id', '=', 'services.id')->sum('services.amount'), 2, ',', '.') }}
        </td>
        <td>{{ $order->created_at }}</td>
        <td>
          <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-success">Editar</a>
          <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="m-4">
    {{ $orders->links() }}
  </div>
  @else
    @if ( Request::has('search') )
      <div class="empty-data p-4 d-flex flex-column justify-content-center align-items-center">
        <p>A sua pesquisa não retornou nenhum dado para o termo: <span class="fw-bolder">{{ Request::input('search') }}</span></p>
        <a href="{{ route('orders.index') }}" class="btn btn-success">Voltar</a>
      </div>
    @else
      <div class="empty-data p-4 d-flex flex-column justify-content-center align-items-center">
        <p>Poxa! Não há nada para mostrar. Que tal cadastrar?</p>
        <a href="{{ route('orders.create') }}" class="btn btn-success">Cadastrar</a>
      </div>
    @endif
  @endif
</div>
@endsection