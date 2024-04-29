<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        {{-- <img
            src="{{asset('assets/')}}/dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
        /> --}}
        <span class="brand-text font-weight-light">SPK - Sherfis Tech</span>
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
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i
                            class="nav-icon fas fa-tachometer-alt"
                        ></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Alternatif
                            <span class="right badge badge-danger"
                                >New</span
                            >
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('kriteria.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Kriteria
                            <span class="right badge badge-danger"
                                >New</span
                            >
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Nilai
                            <span class="right badge badge-danger"
                                >New</span
                            >
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Metode
                            <span class="right badge badge-danger"
                                >New</span
                            >
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Layout Options
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"
                                >6</span
                            >
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a
                                href="pages/layout/top-nav.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/layout/top-nav-sidebar.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Top Navigation + Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/layout/boxed.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Boxed</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/layout/fixed-sidebar.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Fixed Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/layout/fixed-sidebar-custom.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>
                                    Fixed Sidebar
                                    <small>+ Custom Area</small>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/layout/fixed-topnav.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Fixed Navbar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/layout/fixed-footer.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Fixed Footer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/layout/collapsed-sidebar.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Collapsed Sidebar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Charts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a
                                href="pages/charts/chartjs.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>ChartJS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/charts/flot.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Flot</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/charts/inline.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Inline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/charts/uplot.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>uPlot</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            UI Elements
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a
                                href="pages/UI/general.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>General</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/UI/icons.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Icons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/UI/buttons.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Buttons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/UI/sliders.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Sliders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/UI/modals.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Modals & Alerts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/UI/navbar.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Navbar & Tabs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/UI/timeline.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Timeline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/UI/ribbons.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Ribbons</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a
                                href="pages/forms/general.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>General Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/forms/advanced.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Advanced Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/forms/editors.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Editors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="pages/forms/validation.html"
                                class="nav-link"
                            >
                                <i
                                    class="far fa-circle nav-icon"
                                ></i>
                                <p>Validation</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link d-flex justify-content-end">
                        <i
                            class="nav-icon fas fa-door-open text-danger"
                        ></i>
                        <p class="text">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>