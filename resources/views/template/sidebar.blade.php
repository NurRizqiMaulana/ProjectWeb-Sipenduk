<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="{{ url('adminlte/dist/img/logokabtegal.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SI-Penduk</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('adminlte/dist/img/admin.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
          <a href="{{'/dashboard'}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('kriterias')}}" class="nav-link">
              <i class="nav-icon fas fa-cube"></i>
              <p>
                Kriteria & Bobot
              </p>
            </a>
          </li>
          <li class="nav-item">
          {{-- <a href="{{url('subkriterias')}}" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Criteria Rating
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
          <a href="{{url('alternatives')}}" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Alternative
              </p>
            </a>
          </li>
          <li class="nav-header">Result</li>
          <li class="nav-item">
          <a href="{{url('normalisasi')}}" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
                Normalization
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{url('rank')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Rank
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="{{ url('/') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Logout
                <i class="right fas fa-angle"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
