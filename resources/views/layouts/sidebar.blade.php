<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text d-flex">Sistem Pendukung<br>Keputusan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a>Selamat datang {{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul
                class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false"
            >
                <!-- Add icons to the links using the .nav-icon class
      with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('beranda')}}" class="nav-link {{ Request::routeIs('beranda*')?'active':'' }}">
                        <i
                            class="nav-icon fas fa-tachometer-alt"
                        ></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('alternatif.index')}}" class="nav-link {{ Request::routeIs('alternatif.index*')?'active':'' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Alternatif
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('kriteria.index')}}" class="nav-link {{ Request::routeIs('kriteria.index*')?'active':'' }}">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>
                            Kriteria
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class="nav-icon fas fa-right-from-bucket"></i>
                        <p class="text-danger">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>