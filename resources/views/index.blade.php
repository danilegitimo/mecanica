<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Serviços Automotivos</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @routes
    <style>
      .cards div {
        border: 01px solid white;
      }
    </style>
  </head>
  <body>

    @include("components/system/menu/mobile")

    <div class="container-fluid">
      <div class="row">

        @include("components/system/menu/desktop")

        <main class="col-md-10 ms-sm-auto content p-5">
          <div class="container-fluid">

            <header class="content-header mb-4" style="display: flex; justify-content: space-between; align-items: center;">
              <div style="width: 100%;">
                <h1>Bem-vindo(a)!</h1>
                <p>Veja os principais pontos do sistema de forma rápida nessa tela.</p>
              </div>
            </header>

            <div class="row cards">
              <div class="bg-danger text-white col-sm-3 col-md-3 p-4">
                <h1>{{ $orders->count() }}</h1>
                <p>Ordens de Serviços</p>
              </div>
              <div class="bg-primary text-white col-sm-3 col-md-3 p-4">
                <h1>{{ $vehicles }}</h1>
                <p>Veículos</p>
              </div>
              <div class="bg-success text-white col-sm-3 col-md-3 p-4">
                <h1>{{ $clients }}</h1>
                <p>Clientes</p>
              </div>
              <div class="bg-dark text-white col-sm-3 col-md-3 p-4">
                <h1>{{ $parts }}</h1>
                <p>Peças</p>
              </div>
            </div>
          </div>
        </main>

      </div>
    </div>
    </script>
  </body>
</html>