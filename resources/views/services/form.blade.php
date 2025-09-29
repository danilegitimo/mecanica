<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mecânica</title>

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
          <header class="content-header mb-4" style="display: flex; justify-content: space-between; align-items: center;">
            <div style="width: 100%;">
              <h1>Serviços</h1>
              <p>Por favor, mantenha os dados dos serviços atualizados.</p>
            </div>
            <div>
              <a href="{{ route('services.index') }}" class="btn btn-success">Voltar</a>
            </div>
          </header>

          <div>
            <form method="POST" action="{{ isset($service) ? route('services.update', $service->id) : route('services.store') }} " enctype="multipart/form-data">

              @csrf

              @if ( isset($service) )
              @method('PUT')
              @endif

              <div class="row mb-2">

                <div class="col-3">
                  <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $service->name ?? '') }}" required />
                    <label for="name" class="form-label">Nome</label>
                    <div class="invalid-feedback">
                      @error('name')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="col-3">
                  <div class="form-floating">
                    <input type="text" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount" value="{{ old('amount', $service->amount ?? '') }}" required />
                    <label for="amount" class="form-label">Valor</label>
                    <div class="invalid-feedback">
                      @error('amount')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>
                </div>
 
              </div>

              <div class="row mt-4 d-flex justify-content-end">
                <div class="col-2">
                  <button type="submit" class="container-fluid p-2 btn btn-success">Salvar</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>