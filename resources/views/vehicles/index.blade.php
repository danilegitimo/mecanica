@extends('layouts.app')

@section('title', 'Veículos')

@section('header.title', 'Veículos')

@section('header.subtitle', 'Todos os veículos cadastrados e disponíveis para consulta no banco de dados.')

@section('header.content')
<div>
  <a href="{{ route('vehicles.create') }}" class="btn btn-success">Cadastrar</a>
</div>
@endsection

@section('content')
<div>
  @if ( $vehicles->isNotEmpty() )
  <div class="search">
    <form action="{{ route('vehicles.index') }}" class="d-flex">
      <input name="search" type="search" class="form-control me-2" placeholder="Pesquisar..." value="{{ Request::has('search') ? Request::input('search') : '' }}" />
      <button class="btn btn-success">Pesquisar</button>
    </form>
  </div>
  <table class="default-table">
    <thead>
      <tr>
        <th>Placa</th>
        <th>RENAVAM</th>
        <th>Fabricante/Modelo</th>
        <th>Proprietário</th>
        <th>Cor/Ano</th>
        <th>Adicionado</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($vehicles as $vehicle)
      <tr>
        <td>
          <p class="m-0 p-0" style="font-size: 10px;">{{ $vehicle->id }}</p>
          <p class="m-0 p-0 fs-5 fw-bolder">{{ $vehicle->placa }}</p>
        </td>
        <td>{{ $vehicle->renavam }}</td>
        <td>{{ $vehicle?->modelo?->manufacturer }}{{ $vehicle->modelo ? '/' : '' }}{{ $vehicle?->modelo?->name }}</td>
        <td>{{ $vehicle->proprietario }}</td>
        <td>
          <p class="m-0 p-0" style="font-size: 14px;">Cor: {{ $vehicle->cor }}</p>
          <p class="m-0 p-0" style="font-size: 14px;">Ano: {{ $vehicle->ano }}</p>
        </td>
        <td>{{ $vehicle->created_at }}</td>
        <td>
          <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-success">Editar</a>
          <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" style="display:inline">
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
    {{ $vehicles->links() }}
  </div>
  @else
    @if ( Request::has('search') )
      <div class="empty-data p-4 d-flex flex-column justify-content-center align-items-center">
        <p>A sua pesquisa não retornou nenhum dado para o termo: <span class="fw-bolder">{{ Request::input('search') }}</span></p>
        <a href="{{ route('vehicles.index') }}" class="btn btn-success">Voltar</a>
      </div>
    @else
      <div class="empty-data p-4 d-flex flex-column justify-content-center align-items-center">
        <p>Poxa! Não há nada para mostrar. Que tal cadastrar?</p>
        <a href="{{ route('vehicles.create') }}" class="btn btn-success">Cadastrar</a>
      </div>
    @endif
  @endif
</div>
@endsection