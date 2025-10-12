<nav class="col-md-2 d-none d-md-flex sidebar flex-column">
  <div class="mb-4 p-2">
    <h5 class="fw-bold">{{ env('APP_NAME') }}</h5>
  </div>
  <ul class="nav flex-column">
    @include("components/system/menu/links")
  </ul>
  <div class="mt-auto p-2">
    <p>{{ auth()->user()->name }}</p>
  </div>
</nav>