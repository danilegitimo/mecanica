@if ( Route::has('dashboard') )
  <li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Route::is('dashboard/*') ? 'active' : '' }}">Bem-vindo</a>
  </li>
@endif

@if ( Route::has(['vehicles.index', 'vehicles.show']) ) 
<li class="nav-item">
  <a href="{{ route('vehicles.index') }}" class="nav-link {{ Route::is(['vehicles.*']) ? 'active' : '' }}">Veículos</a>
</li>
@endif

@if ( Route::has(['orders.index', 'orders.show']) ) 
<li class="nav-item">
  <a href="{{ route('orders.index') }}" class="nav-link {{ Route::is(['vehicles.*']) ? 'active' : '' }}">Ordens</a>
</li>
@endif