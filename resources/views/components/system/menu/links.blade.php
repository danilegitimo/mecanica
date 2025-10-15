@if ( Route::has('dashboard') )
  <li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Route::is(['dashboard', 'dashboard/*']) ? 'active' : '' }}">Bem-vindo</a>
  </li>
@endif

@if ( Route::has(['vehicles.index', 'vehicles.show']) ) 
<li class="nav-item">
  <a href="{{ route('vehicles.index') }}" class="nav-link {{ Route::is(['vehicles.*']) ? 'active' : '' }}">
    <span class="align-middle">Veículos</span>
  </a>
</li>
@endif

@if ( Route::has(['services.index', 'services.show']) ) 
<li class="nav-item">
  <a href="{{ route('services.index') }}" class="nav-link {{ Route::is(['services.*']) ? 'active' : '' }}">Serviços</a>
</li>
@endif

@if ( Route::has(['parts.index', 'parts.show']) ) 
<li class="nav-item">
  <a href="{{ route('parts.index') }}" class="nav-link {{ Route::is(['parts.*']) ? 'active' : '' }}">Peças</a>
</li>
@endif

@if ( Route::has(['suppliers.index', 'suppliers.show']) ) 
<li class="nav-item">
  <a href="{{ route('suppliers.index') }}" class="nav-link {{ Route::is(['suppliers.*']) ? 'active' : '' }}">Fornecedores</a>
</li>
@endif

@if ( Route::has(['clients.index', 'clients.show']) ) 
<li class="nav-item">
  <a href="{{ route('clients.index') }}" class="nav-link {{ Route::is(['clients.*']) ? 'active' : '' }}">Clientes</a>
</li>
@endif

@if ( Route::has(['orders.index', 'orders.show']) ) 
<li class="nav-item">
  <a href="{{ route('orders.index') }}" class="nav-link {{ Route::is(['orders.*']) ? 'active' : '' }}">Ordens de Serviços</a>
</li>
@endif