<!-- Add icons to the links using the .nav-icon class
    with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview menu-open">
<a href="{{ route('dashboard') }}" class="nav-link active">
  <i class="nav-icon fas fa-home"></i>
  <p>
    Home
  </p>
</a>
</li>

<!-- Sidebar Meetroom -->
@include('layouts.appbo-sidebar-meetroom')
<!-- /.Sidebar Meetroom -->


@if (\Arins\Facades\Roles::only(['sys-admin']))

<!-- Sidebar Meetroom -->
@include('layouts.appbo-sidebar-sysadmin')
<!-- /.Sidebar Meetroom -->

@endif
