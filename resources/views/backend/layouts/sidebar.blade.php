<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('home.index') }}">Mari Makan</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('home.index') }}">MM</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li><a class="nav-link" href="{{ route('admin.index') }}"><span>Dashboard</span></a></li>
          <li class="menu-header">Manajemen</li>
          <li><a class="nav-link" href="{{ route('restaurant.index') }}"><span> Restaurant</span></a></li>
          <li><a class="nav-link" href="{{ route('menu.index') }}"><span> Makanan</span></a></li>
          <li><a class="nav-link" href="{{ route('kritik.index') }}"><span> Kritik & Saran</span></a></li>
      </ul>
  </aside>
</div>