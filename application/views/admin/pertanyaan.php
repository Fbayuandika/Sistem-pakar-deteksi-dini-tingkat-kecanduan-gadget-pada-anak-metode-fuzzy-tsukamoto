<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $title; ?></li>
                <li class="breadcrumb-item"><a href="<?= base_url('datamaster') ?>"><?= $subtitle; ?></a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <?= $this->session->flashdata('message'); ?>
        <a href="<?= base_url('datamaster/addPertanyaan'); ?>" type="button" class="btn btn-primary mb-2">Tambah Pertanyaan</a>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title ml-3">Tabel <?= $subtitle; ?></h5>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Variabel</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pertanyaan as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $p['pernyataan1']; ?><br><?= $p['pernyataan2']; ?><br><?= $p['pernyataan3']; ?><br><?= $p['pernyataan4']; ?></td>
                                    <td><?= $p['bobot1']; ?><br><?= $p['bobot2']; ?><br><?= $p['bobot3']; ?><br><?= $p['bobot4']; ?></td>
                                    <td><?= $p['nama_dimensi']; ?></td>
                                    <td>
                                        <a href="<?= base_url('datamaster/editPertanyaan/') . $p['id_pertanyaan']; ?>"><i class="bi bi-pencil-square"></i></a>
                                        <a href="<?= base_url('datamaster/deletePertanyaan/') . $p['id_pertanyaan']; ?>"><i class="bi bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->