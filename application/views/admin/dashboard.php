<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><?= $title; ?></a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-4">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jumlah Pertanyaan</h5>

                        <div class="d-flex justify-content-center">
                            <h6 class="card-title text-center"><?= $pertanyaan; ?></h6>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-3 col-md-4">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jumlah Aturan</h5>

                        <div class="d-flex justify-content-center">
                            <h6 class="card-title text-center"><?= $aturan; ?></h6>
                        </div>
                    </div>

                </div>
            </div><!-- End Revenue Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-3 col-md-4">
                <div class="card info-card revenue-card">

                    <div class="card-body">
                        <h5 class="card-title text-center">Jumlah Hasil Deteksi</h5>
                        <div class="d-flex justify-content-center">
                            <h6 class="card-title text-center"><?= $hasil; ?></h6>
                        </div>
                    </div>

                </div>
            </div><!-- End Revenue Card -->
        </div>
    </section>
</main>
<!-- End #main -->