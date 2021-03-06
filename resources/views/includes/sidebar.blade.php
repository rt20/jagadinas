  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="#" class="brand-link">
      <img src="{{ asset('img/bpom.png') }}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">e-Office</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if(Auth::user()->roles == 'ADMIN')
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item has-treeview">
            <a href="{{ route('schedules.index') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Jadwal Kegiatan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('apels.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Kekuatan Apel
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('makanans.index') }}" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Menu Makanan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('inventaris.index') }}" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Daftar Kerusakan Inventaris
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('sakits.index') }}" class="nav-link">
              <i class="nav-icon fas fa-procedures"></i>
              <p>
                Taruna Sakit
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('dinas.index') }}" class="nav-link">
              <i class="nav-icon fas fa-street-view"></i>
              <p>
                Taruna Dinas
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('pdlts.index') }}" class="nav-link">
              <i class="nav-icon fas fa-running"></i>
              <p>
                Taruna PDLT
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('puasas.index') }}" class="nav-link">
              <i class="nav-icon fas fa-ban"></i>
              <p>
                Taruna Puasa
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 