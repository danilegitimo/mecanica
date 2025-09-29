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
              <h1>Fornecedores</h1>
              <p>Por favor, mantenha os dados dos fornecedores atualizados.</p>
            </div>
            <div>
              <a href="{{ route('suppliers.index') }}" class="btn btn-success">Voltar</a>
            </div>
          </header>

          <div>
            <form method="POST" action="{{ isset($supplier) ? route('suppliers.update', $supplier->id) : route('suppliers.store') }} " enctype="multipart/form-data">

              @csrf

              @if ( isset($supplier) )
              @method('PUT')
              @endif

              <div class="row mb-2">

                <div class="col-3">
                  <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $supplier->name ?? '') }}" required />
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
                    <input type="text" class="form-control @error('cnpj') is-invalid @enderror" id="cnpj" name="cnpj" value="{{ old('cnpj', $supplier->cnpj ?? '') }}" required />
                    <label for="cnpj" class="form-label">CNPJ</label>
                    <div class="invalid-feedback">
                      @error('cnpj')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>
                </div>

                 <div class="col-3">
                  <div class="form-floating">
                    <input type="text" class="form-control @error('contato') is-invalid @enderror" id="contato" name="contato" value="{{ old('contato', $supplier->contato ?? '') }}" required />
                    <label for="contato" class="form-label">Contato</label>
                    <div class="invalid-feedback">
                      @error('contato')
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