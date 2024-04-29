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

@if (\Arins\Facades\Roles::only(['sys-admin']))

    <!-- Sidebar Meetroom -->
    @include('layouts.appbo-sidebar-sysadmin')
    <!-- /.Sidebar Meetroom -->

@else

    @if (\Arins\Facades\Roles::only(['mroom-admin']))

        <!-- Sidebar Meetroom -->
        @include('layouts.appbo-sidebar-meetroom')
        <!-- /.Sidebar Meetroom -->

    @endif


    @if (\Arins\Facades\Roles::only(['adbook-admin']))

        <!-- Sidebar Contact -->
        @include('layouts.appbo-sidebar-contact')
        <!-- /.Sidebar Contact -->

    @endif

@endif
