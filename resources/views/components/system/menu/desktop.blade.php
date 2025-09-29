<nav class="col-md-2 d-none d-md-flex sidebar flex-column">
  <div class="mb-4 p-2">
    <h5 class="fw-bold">Serviços Automotivos</h5>
  </div>
  <ul class="nav flex-column">

    <li class="nav-item">
      <a  class="nav-link {{ request()->is('dashboard/*') || request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Início</a>
    </li>

    <li class="nav-item">
      <a  class="nav-link {{ request()->is('vehicles/*') || request()->routeIs('vehicles.index') ? 'active' : '' }}" href="{{ route('vehicles.index') }}">Veículos</a>
    </li>

    <li class="nav-item">
      <a  class="nav-link {{ request()->is('services/*') || request()->routeIs('services.index') ? 'active' : '' }}" href="{{ route('services.index') }}">Serviços</a>
    </li>

    <li class="nav-item">
      <a  class="nav-link {{ request()->is('orders/*') || request()->routeIs('orders.index') ? 'active' : '' }}" href="{{ route('orders.index') }}">Ordens de Serviço</a>
    </li>

    <li class="nav-item">
      <a  class="nav-link {{ request()->is('suppliers/*') || request()->routeIs('suppliers.index') ? 'active' : '' }}" href="{{ route('suppliers.index') }}">Fornecedores</a>
    </li>

    <li class="nav-item">
      <a  class="nav-link {{ request()->is('parts/*') || request()->routeIs('parts.index') ? 'active' : '' }}" href="{{ route('parts.index') }}">Peças</a>
    </li>

    <li class="nav-item">
      <a  class="nav-link {{ request()->is('clients/*') || request()->routeIs('clients.index') ? 'active' : '' }}" href="{{ route('clients.index') }}">Clientes</a>
    </li>

  </ul>
  <div class="mt-auto p-2">
    <p>{{ auth()->user()->name }}</p>
  </div>
</nav>