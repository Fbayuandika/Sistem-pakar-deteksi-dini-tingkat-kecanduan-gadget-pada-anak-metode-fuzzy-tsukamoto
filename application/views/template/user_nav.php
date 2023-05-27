<!-- Navbar -->

<nav class="navbar navbar-expand-lg border-b pt-3 pb-3 border-primer">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <h4 class="text-primary">Digital Addiction</h4>
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php if ($title == 'Beranda') : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('user') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/deteksi') ?>">Deteksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/tentang') ?>">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth') ?>">Login</a>
                    </li>
                <?php elseif ($title == 'Deteksi') : ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('user') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('user/deteksi') ?>">Deteksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/tentang') ?>">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth') ?>">Login</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('user') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/deteksi') ?>">Deteksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('user/tentang') ?>">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth') ?>">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>