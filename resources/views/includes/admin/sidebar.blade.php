<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion rounded-right" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">Travelku Admin</div>
    </a>

    <!-- Divider -->
    <hr class="mt-2 sidebar-divider my-0">

    <!-- Nav Item - al -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('travel-package.index') }}">
            <i class="fas fa-umbrella-beach"></i>
            <span>Paket Travel</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('gallery.index') }}">
            <i class="fas fa-images"></i>
            <span>Gallery</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('transaction.index') }}">
            <i class="fas fa-dollar-sign"></i>
            <span>Transaksi</span></a>
    </li>
    <hr class="sidebar-divider">



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="mt-2 text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
