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
              <h1>Veículos</h1>
              <p>Por favor, mantenha os dados do veículo atualizados.</p>
            </div>
            <div>
              <a href="{{ route('vehicles.index') }}" class="btn btn-success">Voltar</a>
            </div>
          </header>

          <div>
            <form method="POST" action="{{ isset($vehicle) ? route('vehicles.update', $vehicle->id) : route('vehicles.store') }} " enctype="multipart/form-data">

              @csrf

              @if ( isset($vehicle) )
              @method('PUT')
              @endif

              <div class="row mb-2">

                <div class="col-3">
                  <div class="form-floating">
                    <input type="text" class="form-control @error('placa') is-invalid @enderror" id="placa" name="placa" value="{{ old('placa', $vehicle->placa ?? '') }}" required />
                    <label for="placa" class="form-label">Placa</label>
                    <div class="invalid-feedback">
                      @error('placa')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="col-3">
                  <div class="form-floating">
                    <input type="text" class="form-control @error('renavam') is-invalid @enderror" id="renavam" name="renavam" value="{{ old('renavam', $vehicle->renavam ?? '') }}" required />
                    <label for="renavam" class="form-label">RENAVAM</label>
                    <div class="invalid-feedback">
                      @error('renavam')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="col-3">
                  <div class="form-floating">
                    <input type="text" class="form-control @error('cor') is-invalid @enderror" id="cor" name="cor" value="{{ old('cor', $vehicle->cor ?? '') }}" required />
                    <label for="cor" class="form-label">Cor</label>
                    <div class="invalid-feedback">
                      @error('cor')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-floating">
                    <input type="text" class="form-control @error('ano') is-invalid @enderror" id="ano" name="ano" value="{{ old('ano', $vehicle->ano ?? '') }}" required />
                    <label for="ano" class="form-label">Ano</label>
                    <div class="invalid-feedback">
                      @error('ano')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-4">
                <div class="col">
                  <div class="form-floating">
                    <input type="text" class="form-control @error('proprietario') is-invalid @enderror" id="proprietario" name="proprietario" value="{{ old('proprietario', $vehicle->proprietario ?? '') }}" required />
                    <label for="proprietario" class="form-label">Prioprietário</label>
                    <div class="invalid-feedback">
                      @error('proprietario')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="mt-2 col-12">
                  <label for="models" class="form-label">Modelo</label>
                  <select name="vehicle_model_id" size="10" id="models" class="form-control">
                    @empty (!$models)
                      @foreach ($models as $model)
                        <option value="{{ $model->id }}">{{ $model->name }}</option>
                      @endforeach
                    @endempty
                  </select>
                  <div class="invalid-feedback">
                    @error('models')
                    {{ $message }}
                    @enderror
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