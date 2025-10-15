<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>

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

        <main class="col-md-10 ms-sm-auto content p-5">
          <div class="container-fluid">

          @include("components/system/session/session")

          <header class="content-header mb-4 d-flex justify-content-between align-items-center">
            <div style="width: 100%;">
              <h1>@yield('header.title')</h1>
              <p>@yield("header.subtitle")</p>
            </div>

            @yield('header.content')

          </header>

          @yield("content")

          </div>
        </main>
      </div>
    </div>
  </body>
</html>