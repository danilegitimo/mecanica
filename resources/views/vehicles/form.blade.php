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
                <p>Para ter um serviço de qualidade, é importante manter os registros no banco de dados atualizados.</p>
              </div>
              <div>
                <a href="{{ route('vehicles.index') }}" class="btn btn-success">Voltar</a>
              </div>
            </header>
            <div>
              <form
                action="{{ isset($vehicle) ? route('vehicles.update') : route('vehicles.store') }}" method="POST" class="container-fluid">
                @csrf @isset($vehicle) @method('PUT') @endisset

                <div class="row">
                  <div class="col">
                    <label class="form-label" for="plate">Placa:</label>
                    <input class="form-control" name="plate" type="text" id="plate" placeholder="" />
                  </div>
                  <div class="col">
                    <label class="form-label" for="register_code">RENAVAM:</label>
                    <input class="form-control" name="register_code" type="text" id="register_code" placeholder="" />
                  </div>
                  <div class="col">
                    <label class="form-label" for="own_identify">CPF/CNPJ do Proprietário:</label>
                    <input class="form-control" name="own_identify" type="text" id="own_identify" placeholder="" />
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <label for="chassi" class="form-label">Chassi:</label>
                    <input id="chassi" name="chassi" type="text" class="form-control" placeholder="" />
                  </div> 
                  <div class="col">
                    <label for="year" class="form-label">Ano Fabricação:</label>
                    <input id="year" name="year" type="text" class="form-control" placeholder="" />
                  </div>
                  <div class="col">
                    <label class="form-label" for="color">Cor predominante:</label>
                    <select class="form-control" name="color" id="color">
                      <option value="">Vermelho</option>
                      <option value="">Vermelho</option>
                      <option value="">Vermelho</option>
                      <option value="">Vermelho</option>
                      <option value="">Vermelho</option>
                      <option value="">Vermelho</option>
                    </select>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <label class="form-label" for="fuel">Combustível:</label>
                    <select class="form-control" name="fuel" id="fuel">
                      <option value="">Alcool</option>
                      <option value="">Gasolina</option>
                      <option value="">Diesel</option>
                      <option value="">GNV</option>
                      <option value="">Alcool/Gasolina</option>
                      <option value="">Alcool/Gasolina/GNV</option>
                    </select>
                  </div>
                  <div class="col">
                    <label class="form-label" for="manufacture">Fabricante:</label>
                    <select class="form-control" name="manufacture" id="manufacture">
                      <option value="">Audi</option>
                      <option value="">BMW</option>
                    </select>
                  </div>
                  <div class="col">
                    <label class="form-label" for="model">Modelo:</label>
                    <select class="form-control" name="model" id="model">
                      <option value="">Audi</option>
                      <option value="">BMW</option>
                    </select>
                  </div>
                  <div class="col">
                    <label class="form-label" for="model_version">Versão:</label>
                    <select class="form-control" name="model_version" id="model_version">
                      <option value="">Flex</option>
                      <option value="">Ya</option>
                    </select>
                  </div>
                </div>

                <div class="mt-4 d-flex justify-content-end">
                  <button type="submit" class="btn btn-success">
                    @isset ($vehicle) Atualizar @else Cadastrar @endisset
                  </button>
                </div>
              </form>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>