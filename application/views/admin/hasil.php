<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('hasil') ?>"><?= $title; ?></a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel Hasil Deteksi</h5>

                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Skor Pakar</th>
                                <th scope="col">Tingkat Kecanduan</th>
                                <th scope="col">Nilai Fuzzy</th>
                                <th scope="col">Tingkat Kecanduan Fuzzy</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($hasil as $h) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $h['nama']; ?></td>
                                    <td><?= $h['umur']; ?></td>
                                    <td><?= $h['jenis_kelamin']; ?></td>
                                    <td><?= $h['skor_pakar']; ?></td>
                                    <td><?= $h['tingkat_kecanduan']; ?></td>
                                    <td><?= $h['hasil_hitung']; ?></td>
                                    <td><?= $h['kecanduan_fuzzy']; ?></td>
                                    <td><?= $h['status']; ?></td>
                                    <td class="d-flex justify-content-center">
                                        <a href="<?= base_url('hasil/penjabaran/' . $h['id_anak']); ?>"><i class="bi bi-eye "></i></a>
                                        <a href="<?= base_url('hasil/delete/' . $h['id_anak']); ?>"><i class="bi bi-trash-fill "></i></a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->