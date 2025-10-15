<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acessar sua conta | {{ env('APP_NAME') }}</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .a {
        background-color: brown;
      }

      .b {
        background-color: white;
      }

      .a, .b {
        min-height: 100vh;
      }

      .login {
        background-color: brown;
        color: white;
        width: 100%;
        font-weight: bolder;
      }

      .login:hover {
        background-color: brown;
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="b col-12 col-md-12 col-lg-4 d-flex flex-column justify-content-center align-items-center p-md-5 p-3">
          <div class="col-12">
            <div class="mb-4">
              <h1 class="fw-bolder">Acesse sua conta</h1>
              <p>Para continuar, você precisa ter uma conta. Por favor, preencha todos os campos abaixos.</p>
            </div>
          </div>
          <form action="/login" method="POST" enctype="multipart/form-data" class="w-100">

            @csrf

            <div class="col-12 mb-2">
              <div class="form-floating">
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" id="email" autocomplete="off" />
                <label for="email" class="form-label">Email</label>
                <div class="invalid-feedback">
                  @error('email') {{ $message }} @enderror
                </div>
              </div>
            </div>
  
            <div class="col-12 mb-2">
              <div class="form-floating">
                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="senha" id="password" />
                <label for="password" class="form-label">Senha</label>
                <div class="invalid-feedback">
                  @error('password') {{ $message }} @enderror
                </div>
              </div>
            </div>
  
            <div class="mt-4 text-center">
              <a href="{{ route('register') }}" style="color: brown;text-decoration: none" class="fw-bolder d-block mb-2">Eu não tenho uma conta</a>
              <!-- <a href="{{ route('password.request') }}" style="color: brown;text-decoration: none" class="fw-bolder d-block">Não tenho mais acesso minha conta</a> -->
            </div>
  
            <div class="mt-4" style="width: 100%;">
              <button class="btn btn-basic login p-3">Acessar</button>
            </div>
          </form>
        </div>
        <div class="a col-8 col-md-8 d-none d-lg-block"></div>
      </div>
    </div>
  </body>
</html>