@extends('layouts.app')

@section('title', 'Clientes')

@section('header.title', 'Clientes')

@section('header.subtitle', 'Todos os clientes cadastrados e disponíveis para consulta no banco de dados.')

@section('header.content')
<div>
  <a href="{{ route('clients.create') }}" class="btn btn-success">Cadastrar</a>
</div>
@endsection

@section('content')
<div>
  @if ( $clients->isNotEmpty() )
  <div class="search">
    <form action="{{ route('clients.index') }}" class="d-flex">
      <input name="search" type="search" class="form-control me-2" placeholder="Pesquisar..." value="{{ Request::has('search') ? Request::input('search') : '' }}" />
      <button class="btn btn-success">Pesquisar</button>
    </form>
  </div>
  <table class="default-table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Endereço</th>
        <th>Contato</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($clients as $client)
      <tr>
        <td>
          <p class="m-0 p-0" style="font-size: 10px;">{{ $client->id }}</p>
          <p class="m-0 p-0 fw-bolder">{{ $client->name }}</p>
        </td>
        <td>{{ $client->cpf }}</td>
        <td>{{ $client->endereco }}</td>
        <td>{{ $client->contato }}</td>
        <td>
          <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-success">Editar</a>
          <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline">
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
    {{ $clients->links() }}
  </div>
  @else
    @if ( Request::has('search') )
      <div class="empty-data p-4 d-flex flex-column justify-content-center align-items-center">
        <p>A sua pesquisa não retornou nenhum dado para o termo: <span class="fw-bolder">{{ Request::input('search') }}</span></p>
        <a href="{{ route('clients.index') }}" class="btn btn-success">Voltar</a>
      </div>
    @else:
      <div class="empty-data p-4 d-flex flex-column justify-content-center align-items-center">
        <p>Poxa! Não há nada para mostrar. Que tal cadastrar?</p>
        <a href="{{ route('clients.create') }}" class="btn btn-success">Cadastrar</a>
      </div>
    @endif
  @endif
</div>
@endsection