<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Admin Panel</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html"></a>
    </div>

    <ul class="sidebar-menu">

      <li class="{{ Request::is('admin/home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin_home') }}">
          <i class="fas fa-hand-point-right"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item dropdown {{ Request::is('admin/amenity/view') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-hand-point-right"></i>
          <span>Hotel Section</span>
        </a>

        <ul class="dropdown-menu">
          <li class="{{ Request::is('admin/amenity/view') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin_amenity_view') }}">
              <i class="fas fa-angle-right"></i> Amenities
            </a>
          </li>
          <li class="">
            <a class="nav-link" href="">
              <i class="fas fa-angle-right"></i> Rooms
            </a>
          </li>
        </ul>

      </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Dropdown
            Items</span></a>
        <ul class="dropdown-menu">
          <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 1</a></li>
          <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 2</a></li>
        </ul>
      </li>

      <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i>
          <span>Setting</span></a></li>

      <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i>
          <span>Form</span></a></li>

      <li class=""><a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i>
          <span>Table</span></a></li>

      <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i>
          <span>Invoice</span></a></li>

    </ul>
  </aside>
</div>