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
  </head>
  <body>

    @include("components/system/menu/mobile")

    <div class="container-fluid">
      <div class="row">

        @include("components/system/menu/desktop")

        <main class="col-md-10 ms-sm-auto content p-5">
          <div class="container-fluid">
            <div class="row">
              <p>Essa página está mudando!</p>
            </div>
          </div>
        </main>

      </div>
    </div>
    </script>
  </body>
</html>