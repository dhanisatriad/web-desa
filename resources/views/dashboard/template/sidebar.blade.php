<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-text mx-3">Desa Sungai Cina</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-university"></i>
            <span>Profil Desa</span>
        </a>
        <div id="collapseTwo" class="collapse {{ Request::is('dashboard/profil-desa/*') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('dashboard/profil-desa/1*') ? 'active' : '' }}"
                    href="{{ route('profil-desa.show', 1) }}">Gambaran Umum</a>
                <a class="collapse-item {{ Request::is('dashboard/profil-desa/2*') ? 'active' : '' }}"
                    href="{{ route('profil-desa.show', 2) }}">Sejarah</a>
                <a class="collapse-item {{ Request::is('dashboard/profil-desa/3*') ? 'active' : '' }}"
                    href="{{ route('profil-desa.show', 3) }}">Demografi</a>
                <a class="collapse-item {{ Request::is('dashboard/profil-desa/4*') ? 'active' : '' }}"
                    href="{{ route('profil-desa.show', 4) }}">Visi & Misi</a>
                <a class="collapse-item {{ Request::is('dashboard/profil-desa/5*') ? 'active' : '' }}"
                    href="{{ route('profil-desa.show', 5) }}">Perangkat Desa</a>
                <a class="collapse-item {{ Request::is('dashboard/profil-desa/6*') ? 'active' : '' }}"
                    href="{{ route('profil-desa.show', 6) }}">Lembaga</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            </i><i class="fas fa-newspaper"></i>
            <span>Kabar Desa</span>
        </a>
        <div id="collapseUtilities" class="collapse {{ Request::is('dashboard/kabar-*') ? 'show' : '' }}"
            aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('dashboard/kabar-desa') ? 'active' : '' }}" href="{{ route('kabar-desa.index') }}">Semua Kabar Desa</a>
                <a class="collapse-item {{ Request::is('/dashboard/kabar-desa?kategori=1') ? 'active' : '' }}"
                    href="/dashboard/kabar-desa?kategori=1">Kabar Desa</a>
                <a class="collapse-item {{ Request::is('/dashboard/kabar-desa?kategori=2') ? 'active' : '' }}"
                    href="/dashboard/kabar-desa?kategori=2">Pengumuman</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ Request::is('dashboard/galeri*') ? 'active' : '' }}">
        <a class="active nav-link" href="{{ route('dashboard-galeri') }}">
            <i class="fas fa-images"></i>
            <span>Galeri</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
