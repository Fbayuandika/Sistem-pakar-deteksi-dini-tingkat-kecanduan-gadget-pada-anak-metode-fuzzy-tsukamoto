<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed " href="<?= base_url('dashboard') ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('datamaster') ?>">
                        <i class="bi bi-circle"></i><span>Aturan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('datamaster/fuzzy') ?>">
                        <i class="bi bi-circle"></i><span>Fuzzy</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('datamaster/pertanyaan') ?>">
                        <i class="bi bi-circle"></i><span>Pertanyaan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('datamaster/kecanduan') ?>">
                        <i class="bi bi-circle"></i><span>Skor Kecanduan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('datamaster/dimensi') ?>">
                        <i class="bi bi-circle"></i><span>Variabel Pendukung</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('hasil'); ?>">
                <i class="bi bi-card-list"></i>
                <span>Hasil Deteksi</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('auth/logout') ?>">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Login Page Nav -->
    </ul>

</aside><!-- End Sidebar-->