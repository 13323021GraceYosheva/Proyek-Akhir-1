<<<<<<< HEAD
<aside class="main-sidebar sidebar-light-success elevation-4">

    <a href="index.php" class="brand-link">
        <img src="../assets/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="profile.php" class="d-block">Users</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item <?= str_ends_with(BaseUrl(),'/admin/') || str_ends_with(BaseUrl(),'/admin/index.php') ? 'menu-open' : '' ?>">
                    <a href="index.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/') || str_ends_with(BaseUrl(),'/admin/index.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item <?= str_ends_with(BaseUrl(),'/admin/puskesmas.php') ? 'menu-open' : '' ?>">
                    <a href="puskesmas.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/puskesmas.php') ? 'active' : '' ?>">
                        <i class="nav-icon 	fas fa-hospital-alt"></i>
                        <p>
                            Data Puskesmas
                        </p>
                    </a>
                </li>
                <li class="nav-item <?= str_ends_with(BaseUrl(),'/admin/kegiatan.php') ? 'menu-open' : '' ?>">
                    <a href="kegiatan.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/kegiatan.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-child"></i>
                        <p>
                            Data Kegiatan
                        </p>
                    </a>
                </li>
                
                <li class="nav-item <?= str_ends_with(BaseUrl(),'/admin/dokter.php') || str_ends_with(BaseUrl(),'/admin/jadwal.php') || str_ends_with(BaseUrl(),'/admin/kategori_layanan.php') || str_ends_with(BaseUrl(),'/admin/layanan.php') ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/dokter.php') || str_ends_with(BaseUrl(),'/admin/jadwal.php') || str_ends_with(BaseUrl(),'/admin/kategori_layanan.php') || str_ends_with(BaseUrl(),'/admin/layanan.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-stethoscope"></i>
                        <p>
                            Data Layanan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dokter.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/dokter.php') ? 'active' : '' ?>">
                                <i class="fas fa-user-md nav-icon"></i>
                                <p>Data Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="jadwal.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/jadwal.php') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Jadwal Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="kategori_layanan.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/kategori_layanan.php') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kategori Layanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="layanan.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/layanan.php') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Layanan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= str_ends_with(BaseUrl(),'/admin/kategori_ukp.php') || str_ends_with(BaseUrl(),'/admin/ukp.php') ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/kategori_ukp.php') || str_ends_with(BaseUrl(),'/admin/ukp.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user-injured"></i>
                        <p>
                            Data UKP
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="kategori_ukp.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/kategori_ukp.php') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kategori UKP</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="ukp.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/ukp.php') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data UKP</p>
                            </a>
                        </li>
                    </ul>
                </li>  
                <li class="nav-header">Website</li>
                <li class="nav-item <?= str_ends_with(BaseUrl(),'/admin/artikel.php') ? 'menu-open' : '' ?>">
                    <a href="artikel.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/artikel.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-paste"></i>
                        <p>
                            Data Artikel
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="settings_web.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/settings_web.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Settings Web
                        </p>
                    </a>
                </li>
                <li class="nav-header">Lainnya</li>
                <li class="nav-item">
                    <a href="users.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/users.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            SignOut
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

=======
<aside class="main-sidebar sidebar-light-success elevation-4">

    <a href="index.php" class="brand-link">
        <img src="../assets/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="profile.php" class="d-block">Users</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item <?= str_ends_with(BaseUrl(),'/admin/') || str_ends_with(BaseUrl(),'/admin/index.php') ? 'menu-open' : '' ?>">
                    <a href="index.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/') || str_ends_with(BaseUrl(),'/admin/index.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item <?= str_ends_with(BaseUrl(),'/admin/puskesmas.php') ? 'menu-open' : '' ?>">
                    <a href="puskesmas.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/puskesmas.php') ? 'active' : '' ?>">
                        <i class="nav-icon 	fas fa-hospital-alt"></i>
                        <p>
                            Data Puskesmas
                        </p>
                    </a>
                </li>
                <li class="nav-item <?= str_ends_with(BaseUrl(),'/admin/kegiatan.php') ? 'menu-open' : '' ?>">
                    <a href="kegiatan.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/kegiatan.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-child"></i>
                        <p>
                            Data Kegiatan
                        </p>
                    </a>
                </li>
                
                <li class="nav-item <?= str_ends_with(BaseUrl(),'/admin/dokter.php') || str_ends_with(BaseUrl(),'/admin/jadwal.php') || str_ends_with(BaseUrl(),'/admin/kategori_layanan.php') || str_ends_with(BaseUrl(),'/admin/layanan.php') ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/dokter.php') || str_ends_with(BaseUrl(),'/admin/jadwal.php') || str_ends_with(BaseUrl(),'/admin/kategori_layanan.php') || str_ends_with(BaseUrl(),'/admin/layanan.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-stethoscope"></i>
                        <p>
                            Data Layanan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dokter.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/dokter.php') ? 'active' : '' ?>">
                                <i class="fas fa-user-md nav-icon"></i>
                                <p>Data Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="jadwal.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/jadwal.php') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Jadwal Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="kategori_layanan.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/kategori_layanan.php') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kategori Layanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="layanan.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/layanan.php') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Layanan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= str_ends_with(BaseUrl(),'/admin/kategori_ukp.php') || str_ends_with(BaseUrl(),'/admin/ukp.php') ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/kategori_ukp.php') || str_ends_with(BaseUrl(),'/admin/ukp.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user-injured"></i>
                        <p>
                            Data UKP
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="kategori_ukp.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/kategori_ukp.php') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kategori UKP</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="ukp.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/ukp.php') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data UKP</p>
                            </a>
                        </li>
                    </ul>
                </li>  
                <li class="nav-header">Website</li>
                <li class="nav-item <?= str_ends_with(BaseUrl(),'/admin/artikel.php') ? 'menu-open' : '' ?>">
                    <a href="artikel.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/artikel.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-paste"></i>
                        <p>
                            Data Artikel
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="settings_web.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/settings_web.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Settings Web
                        </p>
                    </a>
                </li>
                <li class="nav-header">Lainnya</li>
                <li class="nav-item">
                    <a href="users.php" class="nav-link <?= str_ends_with(BaseUrl(),'/admin/users.php') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            SignOut
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

>>>>>>> 3f3c0cc9417be49b819c9518551879e5b4cf08fb
</aside>