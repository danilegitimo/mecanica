<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ env('APP_NAME') }}</title>

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

          @include("components/session/session")

          <header class="content-header mb-4 d-flex justify-content-between align-items-center">
            <div style="width: 100%;">
              <h1>Veículos</h1>
              <p>Todos os veículos cadastrados e disponíveis para consulta no banco de dados.</p>
            </div>
            <div>
              <a href="{{ route('vehicles.create') }}" class="btn btn-success d-flex">Cadastrar</a>
            </div>
          </header>

          <div>
            @if ( $vehicles->isNotEmpty() )
            <div class="search d-flex">
              <form action="{{ route('vehicle.index') }}" method="POST">
                <input name="search" type="search" class="form-control me-2" placeholder="Pesquisar..." />
                <button class="btn btn-info">Pesquisar</button>
              </form>
            </div>
            <table class="default-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Criado</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($vehicles as $vehicle)
                <tr>
                  <td>{{ $vehicle->id }}</td>
                  <td>{{ $vehicle->created_at }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @else
              <div class="empty-data p-4 d-flex flex-column justify-content-center align-items-center">
                <p>Poxa! Não há nada para mostrar. Que tal cadastrar?</p>
                <a href="{{ route('vehicles.create') }}" class="btn btn-success">Cadastrar</a>
              </div>
            @endif
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>