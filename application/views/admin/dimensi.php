<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $title; ?></li>
                <li class="breadcrumb-item"><a href="<?= base_url('datamaster/dimensi') ?>"><?= $subtitle; ?></a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <?= $this->session->flashdata('message'); ?>
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#basicModal">Tambah Variabel</button>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel <?= $subtitle; ?></h5>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col-4">Nama Dimensi</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($dimensi as $d) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $d['nama_dimensi']; ?></td>
                                    <td><?= $d['ket_dimensi']; ?></td>
                                    <td>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#editModal<?= $d['id_dimensi']; ?>"><i class="bi bi-pencil-square"></i></a>
                                        <a href="<?= base_url('datamaster/deleteDimensi/') . $d['id_dimensi']; ?>"><i class="bi bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                </div>
            </div>
        </div>

        <!-- Add Modal -->
        <div class="modal fade" id="basicModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Variabel Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url('datamaster/dimensi'); ?>" method="POST">
                        <div class="modal-body">
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-4 col-form-label">Nama Variabel</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama variabel">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" style="height: 100px" id="keterangan" name="keterangan"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </div>
        <!-- End Add Modal -->

        <!-- Add Edit -->
        <?php $no = 1;
        foreach ($dimensi as $d) : $no++;
        ?>
            <div class="modal fade" id="editModal<?= $d['id_dimensi']; ?>" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Variabel Baru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= base_url('datamaster/editDimensi'); ?>" method="POST">
                            <div class="modal-body">
                                <input type="hidden" name="id" id="id" value="<?= $d['id_dimensi']; ?>">
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-4 col-form-label">Nama Variabel</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $d['nama_dimensi']; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" style="height: 100px" id="keterangan" name="keterangan"><?= $d['ket_dimensi']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- End Edit Modal -->
    </section>
</main><!-- End #main -->