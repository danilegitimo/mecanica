<div class="d-md-none bg-white border-bottom p-4 d-flex align-items-center justify-content-between">
  <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="mx-auto flex-grow-1 ps-2">
    <strong>Serviços Automotivos</strong>
  </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
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
        <a  class="nav-link {{ request()->is('suplliers/*') || request()->routeIs('suplliers.index') ? 'active' : '' }}" href="{{ route('suplliers.index') }}">Fornecedores</a>
      </li>
      
      <li class="nav-item">
        <a  class="nav-link {{ request()->is('parts/*') || request()->routeIs('parts.index') ? 'active' : '' }}" href="{{ route('parts.index') }}">Peças</a>
      </li>

      <li class="nav-item">
        <a  class="nav-link {{ request()->is('clients/*') || request()->routeIs('clients.index') ? 'active' : '' }}" href="{{ route('clients.index') }}">Clientes</a>
      </li>
    </ul>
  </div>
</div>