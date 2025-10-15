@extends('layouts.app')

@section('title', 'Serviços')

@section('header.title', 'Serviços')

@section('header.subtitle', 'Todos os serviços cadastrados e disponíveis para consulta no banco de dados.')

@section('header.content')
<div>
  <a href="{{ route('services.create') }}" class="btn btn-success">Cadastrar</a>
</div>
@endsection

@section('content')
<div>
  @if ( $services->isNotEmpty() )
  <div class="search">
    <form action="{{ route('services.index') }}" class="d-flex">
      <input name="search" type="search" class="form-control me-2" placeholder="Pesquisar..." value="{{ Request::has('search') ? Request::input('search') : '' }}" />
      <button class="btn btn-success">Pesquisar</button>
    </form>
  </div>
  <table class="default-table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($services as $service)
      <tr>
        <td>
          <p class="m-0 p-0" style="font-size: 10px;">{{ $service->id }}</p>
          <p class="m-0 p-0 fw-bolder">{{ $service->name }}</p>
        </td>
        <td>R$ {{ number_format($service->amount, 2, ',', '.') }}</td>
        <td>
          <a href="{{ route('services.edit', $service->id) }}" class="btn btn-success">Editar</a>
          <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline">
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
    {{ $services->links() }}
  </div>
  @else
    @if ( Request::has('search') )
      <div class="empty-data p-4 d-flex flex-column justify-content-center align-items-center">
        <p>A sua pesquisa não retornou nenhum dado para o termo: <span class="fw-bolder">{{ Request::input('search') }}</span></p>
        <a href="{{ route('services.index') }}" class="btn btn-success">Voltar</a>
      </div>
    @else:
      <div class="empty-data p-4 d-flex flex-column justify-content-center align-items-center">
        <p>Poxa! Não há nada para mostrar. Que tal cadastrar?</p>
        <a href="{{ route('services.create') }}" class="btn btn-success">Cadastrar</a>
      </div>
    @endif
  @endif
</div>
@endsection