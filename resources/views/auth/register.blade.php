<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar uma conta | {{ env('APP_NAME') }}</title>
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
              <h1 class="fw-bolder">Crie uma conta</h1>
              <p>Para continuar, você precisa criar uma conta. Por favor, preencha todos os campos abaixos.</p>
            </div>
          </div>
          <form action="/register" method="POST" enctype="multipart/form-data" class="w-100">

            @csrf

            <div class="form-floating mb-2">
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="nome" autocomplete="off" />
              <label for="name" class="form-label">Nome</label>
              <div class="invalid-feedback">
                @error('name') {{ $message }} @enderror
              </div>
            </div>
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
  
            <div class="col-12 mb-2">
              <div class="form-floating">
                <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="senha" id="password_confirmation" />
                <label for="password_confirmation" class="form-label">Repita a senha</label>
                <div class="invalid-feedback">
                  @error('password_confirmation') {{ $message }} @enderror
                </div>
              </div>
            </div>
  
            <div class="mt-4 text-center">
              <a href="{{ route('login') }}" style="color: brown;text-decoration: none" class="fw-bolder">Já tenho cadastro!</a>
            </div>
  
            <div class="mt-4" style="width: 100%;">
              <button class="btn btn-basic login p-3">Cadastrar</button>
            </div>
          </form>
        </div>
        <div class="a col-8 col-md-8 d-none d-lg-block"></div>
      </div>
    </div>
  </body>
</html>