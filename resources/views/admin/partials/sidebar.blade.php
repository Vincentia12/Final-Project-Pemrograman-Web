<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #ccd6ee">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="{{asset('/layouts/img/LOGO_SH_FIX.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SISTERHOODS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="/admin" class="d-block">Selamat Datang Admin!</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt "></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="/admin" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Article
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/submission" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Article Submission</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/list-article" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Article</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>