<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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

      <!-- Sidebar Meetroom -->
      @include('layouts.appbo-sidebar-sysadmin')
      <!-- /.Sidebar Meetroom -->

    <!-- Logout -->
    <li class="nav-item has-treeview menu-open">
      <a href="{{ route('AuthAdmin.logout') }}" class="nav-link"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
         <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
          Logout
        </p>
      </a>

      <form id="logout-form" action="{{ route('AuthAdmin.logout') }}" method="POST" style="display: none;">
          @csrf
      </form>

    </li>



  </ul>
</nav>
<!-- /.sidebar-menu -->
