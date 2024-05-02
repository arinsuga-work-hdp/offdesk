<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      @if (\Arins\Facades\Roles::fullcontrol())

        <!-- Sidebar Meetroom -->
        @include('layouts.appbo-sidebar-fullcontrol')
        <!-- /.Sidebar Meetroom -->

      @else

        <!-- Sidebar Meetroom -->
        @include('layouts.appbo-sidebar-byroles')
        <!-- /.Sidebar Meetroom -->

      @endif

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
