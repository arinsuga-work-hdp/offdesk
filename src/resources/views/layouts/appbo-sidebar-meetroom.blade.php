<!-- Booking -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-tag"></i>
    <p>
      Ruang Meeting
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route('bookpostmo.index.today') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Postmo</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{ route('bookfaried.index.today') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Faried</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{ route('bookfounder.index.today') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Founder</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{ route('bookinterior.index.today') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Interior</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{ route('bookbulat.index.today') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>R.Bulat</p>
      </a>
    </li>
  </ul>
</li>
