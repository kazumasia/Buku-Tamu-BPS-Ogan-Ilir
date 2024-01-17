<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <img width="50" src="<?= base_url(); ?>img/bps.png" />
        </div>
        <div class="sidebar-brand-text mx-3">BPS </div>
    </a>

    <?php if (in_groups('admin')): ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Admin Management </div>

        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>User List</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/list'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Pengunjung</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/puas'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Tabel Kepuasan</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/statistik'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Statistik</span></a>
        </li>


    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Interface
    </div>

    <!-- Nav Item - My Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Dashboard USER</span></a>
    </li>

    <!-- Nav Item - Edit Profile -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>