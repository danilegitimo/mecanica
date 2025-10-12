<div class="d-md-none bg-white border-bottom p-4 d-flex align-items-center justify-content-between">
  <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="mx-auto flex-grow-1 ps-2">
    <strong>{{ env('APP_NAME') }}</strong>
  </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="nav flex-column">
      @include("components/system/menu/links")
    </ul>
  </div>
</div>