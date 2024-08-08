<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> @yield('content-header-title')</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">@yield('content-header-breadcrumb-item-link')</li>
            <li class="breadcrumb-item active">@yield('content-header-breadcrumb-item-link-active')</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container-fluid">
      @include('admin.includes.alerts.success')
      @include('admin.includes.alerts.error')
      @yield('content-body')
    </div>
  </div>
</div>
