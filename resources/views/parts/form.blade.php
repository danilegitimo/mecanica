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
              <h1>Peças</h1>
              <p>Por favor, mantenha os dados das peças atualizados.</p>
            </div>
            <div>
              <a href="{{ route('parts.index') }}" class="btn btn-success">Voltar</a>
            </div>
          </header>

          <div>
            <form method="POST" action="{{ isset($part) ? route('parts.update', $part->id) : route('parts.store') }} " enctype="multipart/form-data">

              @csrf

              @if ( isset($part) )
              @method('PUT')
              @endif

              <div class="row mb-2">

                <div class="col-3">
                  <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $part->name ?? '') }}" required />
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
                    <input type="text" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity', $part->quantity ?? '') }}" required />
                    <label for="quantity" class="form-label">Quantidade</label>
                    <div class="invalid-feedback">
                      @error('quantity')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>
                </div>


                <div class="mt-2 col-12">
                  <label for="suppliers" class="form-label">Fornecedor</label>
                  <select name="supplier_id" size="10" id="suppliers" class="form-control">
                    @empty (!$suppliers)
                      @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                      @endforeach
                    @endempty
                  </select>
                  <div class="invalid-feedback">
                    @error('supplier_id')
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