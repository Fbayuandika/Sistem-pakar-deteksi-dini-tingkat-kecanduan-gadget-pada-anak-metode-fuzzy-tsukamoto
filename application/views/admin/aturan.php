<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $title; ?></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('datamaster') ?>"><?= $subtitle; ?></a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <?= $this->session->flashdata('message'); ?>
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Aturan</button>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel <?= $subtitle; ?></h5>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <?php $i = 1; ?>
                                <?php foreach ($dimensi as $d) : ?>
                                    <th scope="col"><?= $d['nama_dimensi']; ?></th>
                                    <?php $i++; ?>
                                <?php endforeach ?>
                                <th scope="col">Tingkat Kecanduan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $j = 1; ?>
                            <?php foreach ($aturan as $a) : ?>
                                <tr>
                                    <th scope="row"><?= $j; ?></th>
                                    <td><?= $a['dimensi1']; ?></td>
                                    <td><?= $a['dimensi2']; ?></td>
                                    <td><?= $a['dimensi3']; ?></td>
                                    <td><?= $a['tingkat_kecanduan']; ?></td>
                                    <td>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#editModal<?= $a['id_aturan']; ?>"><i class="bi bi-pencil-square"></i></a>
                                        <a href="<?= base_url('datamaster/deleteAturan/') . $a['id_aturan']; ?>"><i class="bi bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                                <?php $j++; ?>
                            <?php endforeach; ?>
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
                <h5 class="modal-title">Tambah Aturan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('datamaster'); ?>" method="POST">
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="dimensi1" class="col-sm-5 col-form-label">Aktifitas Fisik</label>
                        <div class="col-sm-7">
                            <select name="dimensi1" id="dimensi1" class="col-sm-6 col-form-label">
                                <?php foreach ($kecanduan as $k) : ?>
                                    <option value="<?= $k['tingkat_kecanduan']; ?>"><?= $k['tingkat_kecanduan']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="dimensi2" class="col-sm-5 col-form-label">Emosional</label>
                        <div class="col-sm-7">
                            <select name="dimensi2" id="dimensi2" class="col-sm-6 col-form-label">
                                <?php foreach ($kecanduan as $k) : ?>
                                    <option value="<?= $k['tingkat_kecanduan']; ?>"><?= $k['tingkat_kecanduan']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="dimensi3" class="col-sm-5 col-form-label">Interaksi Sosial</label>
                        <div class="col-sm-7">
                            <select name="dimensi3" id="dimensi3" class="col-sm-6 col-form-label">
                                <?php foreach ($kecanduan as $k) : ?>
                                    <option value="<?= $k['tingkat_kecanduan']; ?>"><?= $k['tingkat_kecanduan']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="id_kecanduan" class="col-sm-5 col-form-label">Tingkat Kecanduan</label>
                        <div class="col-sm-7">
                            <select name="id_kecanduan" id="id_kecanduan" class="col-sm-6 col-form-label">
                                <?php foreach ($kecanduan as $k) : ?>
                                    <option value="<?= $k['id_tingkat_kecanduan']; ?>"><?= $k['tingkat_kecanduan']; ?></option>
                                <?php endforeach ?>
                            </select>
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
foreach ($aturan as $a) : $no++;
?>
    <div class="modal fade" id="editModal<?= $a['id_aturan']; ?>" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Aturan Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('datamaster/editAturan'); ?>" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="<?= $a['id_aturan']; ?>">
                        <div class="row mb-3">
                            <label for="dimensi1" class="col-sm-5 col-form-label">Aktifitas Fisik</label>
                            <div class="col-sm-7">
                                <select name="dimensi1" id="dimensi1" class="col-sm-6 col-form-label">
                                    <option value="<?= $a['dimensi1']; ?>"><?= $a['dimensi1']; ?></option>
                                    <?php foreach ($kecanduan as $k) : ?>
                                        <option value="<?= $k['tingkat_kecanduan']; ?>"><?= $k['tingkat_kecanduan']; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dimensi2" class="col-sm-5 col-form-label">Emosional</label>
                            <div class="col-sm-7">
                                <select name="dimensi2" id="dimensi2" class="col-sm-6 col-form-label">
                                    <option value="<?= $a['dimensi2']; ?>"><?= $a['dimensi2']; ?></option>
                                    <?php foreach ($kecanduan as $k) : ?>
                                        <option value="<?= $k['tingkat_kecanduan']; ?>"><?= $k['tingkat_kecanduan']; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dimensi3" class="col-sm-5 col-form-label">Interaksi Sosial</label>
                            <div class="col-sm-7">
                                <select name="dimensi3" id="dimensi3" class="col-sm-6 col-form-label">
                                    <option value="<?= $a['dimensi3']; ?>"><?= $a['dimensi3']; ?></option>
                                    <?php foreach ($kecanduan as $k) : ?>
                                        <option value="<?= $k['tingkat_kecanduan']; ?>"><?= $k['tingkat_kecanduan']; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="id_kecanduan" class="col-sm-5 col-form-label">Tingkat Kecanduan</label>
                            <div class="col-sm-7">
                                <select name="id_kecanduan" id="id_kecanduan" class="col-sm-6 col-form-label">
                                    <option value="<?= $a['id_tingkat_kecanduan']; ?>"><?= $a['tingkat_kecanduan']; ?></option>
                                    <?php foreach ($kecanduan as $k) : ?>
                                        <option value="<?= $k['id_tingkat_kecanduan']; ?>"><?= $k['tingkat_kecanduan']; ?></option>
                                    <?php endforeach ?>
                                </select>
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