@extends('layouts.app')

@section('title')
  @isset($variable) Veículo ({{ $variable->placa }}) @else Cadastro de veículo @endif
@endsection

@section('header.title', '')

@section('header.subtitle', 'Para ter um serviço de qualidade, é importante manter os registros no banco de dados atualizados.')

@section('header.content')
<div>
  <a href="{{ route('vehicles.index') }}" class="btn btn-success">Voltar</a>
</div>
@endsection

@section('content')
@endsection