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

          @if ( session('error') )
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          @if ( session('success') )
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <header class="content-header mb-4" style="display: flex; justify-content: space-between; align-items: center;">
            <div style="width: 100%;">
              <h1>Ordem de serviço</h1>
              <p>Todas as ordem de serviços cadastradas e disponíveis para consulta no banco de dados.</p>
            </div>
            <div>
              <a href="{{ route('orders.create') }}" class="btn btn-success">Cadastrar</a>
            </div>
          </header>

          <div>
            @if ( $orders->isNotEmpty() )
            <table class="default-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Veículo</th>
                  <th>Proprietário</th>
                  <th>Serviços</th>
                  <th>Peças</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                <tr>
                  <td>{{ $order->id }}</td>
                  <td>{{ $order->vehicle->modelo->name }} - {{ $order->vehicle->placa }}</td>
                  <td>{{ $order->proprietario->name }}</td>
                  <td>
                    @foreach ($order->services as $service)
                      <p class="m-0">{{ $service->service->name }}</p class="m-0">
                    @endforeach
                  </td>
                  <td>
                    @empty($order->parts)
                    --
                    @else
                    @foreach ($order->parts as $part)
                      <p class="m-0">{{ $part->part->name }}</p>
                    @endforeach
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-success">Editar</a>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @else
             <p>Não há nenhuma ordem de serviço no banco de dados. Cadastre um.</p>
            @endif
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>