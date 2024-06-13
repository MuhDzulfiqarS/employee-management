<li class="nav-item">
    <a class="nav-link {{ Request::is('home') ? '':'collapsed' }}" href="{{ url('home') }}">
    
        <span>{{ $user->name }}</span>
    </a>
</li>

<!-- ADMIN -->
@if($user->level == 1)

<li class="nav-heading">Master Data</li>
<!-- Riwayat Master Data -->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#masterdata-nav" data-bs-toggle="collapse" href="#">
      <i class="fa-solid fa-database"></i></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="masterdata-nav" class="nav-content collapse {{ Request::is('data_karyawan') ? 'show':'' }}" data-bs-parent="#sidebar-nav">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('karyawan') ? 'active':'' }}"href="{{ url('karyawan') }}">
          <i class="bi bi-circle"></i><span>Data Karyawan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('departemen') ? 'active':'' }}"href="{{ url('departemen') }}">
          <i class="bi bi-circle"></i><span>Data Departemen</span>
        </a>
      </li>
     
    </ul>
  </li><!-- End Master Data -->


@endif