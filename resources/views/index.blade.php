<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @routes
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    @include("components/system/menu/mobile")

    <div class="container-fluid">
      <div class="row">

        @include("components/system/menu/desktop")

        <main class="col-md-10 ms-sm-auto p-5">
          <div class="container-fluid">

            <header class="mb-4 d-flex justify-content-between align-items-center">
              <div>
                <h1>Bem-vindo(a)!</h1>
                <p>Veja os principais pontos do sistema de forma rápida nessa tela.</p>
              </div>
              <div>
                <button>#</button>
              </div>
            </header>

            <div>
              <table class="default-table">
                <div class="table-header container-fluid">
                  <div class="row d-flex">
                    <div class="col-4">
                      <input type="search" id="search" placeholder="Pesquise" class="form-control" />
                    </div>
                    <div class="col d-flex justify-content-end">
                      <button class="btn btn-primary"></button>
                    </div>
                  </div>
                </div>
                <thead>
                  <tr>
                    <th>#</th>
                    <th>E-mail</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#</td>
                    <td>Munha</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </main>

      </div>
    </div>

    <div class="container-fluid">
      
    </div>

  </body>
</html>