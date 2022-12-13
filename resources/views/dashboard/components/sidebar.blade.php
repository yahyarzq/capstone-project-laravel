<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard/" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/import-usulan" class="nav-link {{ Request::is('dashboard/import-usulan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Import Usulan
                        </p>
                    </a>
                </li>
                <li class="nav-item  {{ Request::is('dashboard/usulan*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Usulan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard/usulan-fisik" class="nav-link {{ Request::is('dashboard/usulan-fisik') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usulan Fisik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/usulan-non-fisik" class="nav-link {{ Request::is('dashboard/usulan-non-fisik') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usulan Non-Fisik</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/history-usulan" class="nav-link {{ Request::is('dashboard/history-usulan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            History Usulan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
