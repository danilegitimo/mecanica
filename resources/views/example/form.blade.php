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
              <div>
                <h1>Veículos</h1>
                <p>Para um serviço de qualidade, é importante manter os registros no banco de dados atualizados.</p>
              </div>
              <div>
                <a href="{{ route('vehicles.index') }}" class="btn btn-success">Voltar</a>
              </div>
            </header>

            <div>
              <form
                action="{{ isset($vehicle) ? route('vehicles.update') : route('vehicles.store') }}" method="POST" class="container-fluid">
                @csrf @isset($vehicle) @method('PUT') @endisset
                <div class="row w-50" id="search-plate">
                  <div class="col">
                    <label for="" class="form-label">Placa:</label>
                    <div class="d-flex mb-2">
                      <input type="text" class="form-control me-2" placeholder="ABC-1D23" />
                      <button class="btn btn-success">Pesquisar</button>
                    </div>
                    <span class="form-text">
                      Antes do cadastro, o veículo em questão será pesquisado em outros bancos de dados para verificar se não há restrições ou queixa de roubo/furto. Após a consulta, em caso de sucesso, será liberado o cadastro.
                    </span>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </main>
      </div>
    </div>

    <script src="/src/jquery.min.js"></script>
    <script src="/src/jquery.mask.js"></script>
    <script src="/src/index.js"></script>
  </body>
</html>