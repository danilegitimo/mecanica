<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Veículos | {{ env('APP_NAME') }}</title>

  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  @routes
</head>

<body>

  @include("components/system/menu/mobile")

  <div class="container-fluid">
    <div class="row">

      @include("components/system/menu/desktop")

      <main class="col-md-10 ms-sm-auto content p-5">
        <div class="container-fluid">

        @include("components/system/session/session")

          <header class="content-header mb-4 d-flex justify-content-between align-items-center">
            <div style="width: 100%;">
              <h1>Veículos</h1>
              <p>Todos os veículos cadastrados e disponíveis para consulta no banco de dados.</p>
            </div>
            <div>
              @if ( !Request::has('search') )
              <a href="{{ route('vehicles.create') }}" class="btn btn-success">Cadastrar</a>
              @endif
            </div>
          </header>

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
                  <th>Ordem de Serviço</th>
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
                  <td>Não</td>
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
              @else:
                <div class="empty-data p-4 d-flex flex-column justify-content-center align-items-center">
                  <p>Poxa! Não há nada para mostrar. Que tal cadastrar?</p>
                  <a href="{{ route('vehicles.create') }}" class="btn btn-success">Cadastrar</a>
                </div>
              @endif
            @endif
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>