<aside class="main-sidebar sidebar-dark-warning elevation-4">
  <a href="{{ route('admin.dashboard') }}" class="brand-link">
    <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">شعار العميل</span>
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="Profile">
      </div>
      <div class="info">
        <a href="#void(0)" class="d-block text-bold">اسم المستخدم :
          <span class="badge badge-warning text-xs pl-2 pr-2">{{ auth()->user()->name }}</span></a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              إعدادات الضبط العام
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.adminPanelSetting.index') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>الضبط العام</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</aside>
