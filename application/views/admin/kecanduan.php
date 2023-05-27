<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $title; ?></li>
                <li class="breadcrumb-item"><a href="<?= base_url('datamaster/kecanduan') ?>"><?= $subtitle; ?></a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <?= $this->session->flashdata('message'); ?>
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Tingkat Kecanduan</button>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel <?= $subtitle; ?></h5>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tingkat Kecanduan</th>
                                <th scope="col">Skor Min</th>
                                <th scope="col">Skor Maks</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pakar as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $p['tingkat_kecanduan']; ?></td>
                                    <td><?= $p['skor_min']; ?></td>
                                    <td><?= $p['skor_maks']; ?></td>
                                    <td>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#editModal<?= $p['id_kecanduan_pakar']; ?>"><i class="bi bi-pencil-square"></i></a>
                                        <a href="<?= base_url('datamaster/deleteKecanduan/') . $p['id_kecanduan_pakar']; ?>"><i class="bi bi-trash-fill"></i></a>
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
    </section>
</main><!-- End #main -->

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Tingkat Kecanduan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('datamaster/kecanduan'); ?>" method="POST">
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-4 col-form-label">Nama Tingkatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama tingkat kecanduan">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="batas_bawah" class="col-sm-4 col-form-label">Batas Bawah</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="batas_bawah" name="batas_bawah">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="batas_atas" class="col-sm-4 col-form-label">Batas Atas</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="batas_atas" name="batas_atas">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pesan" class="col-sm-4 col-form-label">Pesan</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" style="height: 100px" id="pesan" name="pesan" placeholder="Masukkan keterangan pesan"></textarea>
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

<!-- Edit Modal -->
<?php $no = 1;
foreach ($pakar as $p) : $no++;
?>
    <div class="modal fade" id="editModal<?= $p['id_kecanduan_pakar']; ?>" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Tingkat Kecanduan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('datamaster/editKecanduan'); ?>" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="<?= $p['id_kecanduan_pakar']; ?>">
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-4 col-form-label">Nama Tingkatan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $p['tingkat_kecanduan'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="batas_bawah" class="col-sm-4 col-form-label">Batas Bawah</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="batas_bawah" name="batas_bawah" value="<?= $p['skor_min']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="batas_atas" class="col-sm-4 col-form-label">Batas Atas</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="batas_atas" name="batas_atas" value="<?= $p['skor_maks']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pesan" class="col-sm-4 col-form-label">Pesan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" style="height: 100px" id="pesan" name="pesan" value="<?= $p['pesan']; ?>"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form><!-- End General Form Elements -->
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Edit Modal -->