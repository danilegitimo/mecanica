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
              <h1>Ordem de Serviço</h1>
              <p>Por favor, mantenha os dados da ordem de serviço atualizados.</p>
            </div>
            <div>
              <a href="{{ route('orders.index') }}" class="btn btn-success">Voltar</a>
            </div>
          </header>

          <div>
            <form method="POST" action="{{ isset($order) ? route('orders.update', $order->id) : route('orders.store') }} " enctype="multipart/form-data">

              @csrf

              @if ( isset($order) )
              @method('PUT')
              @endif

              <div class="row mb-2">
                <div class="mt-2 col">
                  <label for="clients" class="form-label">Cliente</label>
                  <select name="client_id" size="10" id="clients" class="form-control">
                    @empty (!$clients)
                      @foreach ($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                      @endforeach
                    @endempty
                  </select>
                  <div class="invalid-feedback">
                    @error('clients')
                    {{ $message }}
                    @enderror
                  </div>
                </div>

                <div class="mt-2 col">
                  <label for="vehicles" class="form-label">Veículo</label>
                  <select name="vehicle_id" size="10" id="vehicles" class="form-control">
                    @empty (!$vehicles)
                      @foreach ($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}">{{ $vehicle->modelo->name }} ({{ $vehicle->placa }})</option>
                      @endforeach
                    @endempty
                  </select>
                  <div class="invalid-feedback">
                    @error('vehicles')
                    {{ $message }}
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row mb-4">

                <div class="mt-2 col">
                  <label for="services" class="form-label">Serviços</label>
                  <select name="services[]" size="10" id="services" class="form-control" multiple>
                    @empty (!$services)
                      @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                      @endforeach
                    @endempty
                  </select>
                  <div class="invalid-feedback">
                    @error('services')
                    {{ $message }}
                    @enderror
                  </div>
                </div>

                <div class="mt-2 col-12">
                  <label for="parts" class="form-label">Peças</label>
                  <select name="parts[]" size="10" id="parts" class="form-control" multiple>
                    @empty (!$parts)
                      @foreach ($parts as $parts)
                        <option value="{{ $parts->id }}">{{ $parts->name }}</option>
                      @endforeach
                    @endempty
                  </select>
                  <div class="invalid-feedback">
                    @error('parts')
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