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
    <!-- Section Dimensi -->
    <section class="section">
        <?= $this->session->flashdata('message'); ?>
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Fuzzy Dimensi</button>
        <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#addFuzzy">Tambah Fuzzy Kecanduan</button>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel <?= $subtitle; ?> Dimensi</h5>
                    <!-- Default Tabs -->
                    <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                        <?php $i = 1; ?>
                        <?php foreach ($dimensi as $d) : ?>
                            <?php if ($d['id_dimensi'] == 1) : ?>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true"><?= $d['nama_dimensi'] ?></button>
                                </li>
                            <?php elseif ($d['id_dimensi'] == 2) : ?>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false"><?= $d['nama_dimensi'] ?></button>
                                </li>
                            <?php else : ?>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="false"><?= $d['nama_dimensi'] ?></button>
                                </li>
                            <?php endif; ?>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content pt-2" id="myTabjustifiedContent">
                        <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Var_linguistik</th>
                                        <th scope="col">Y(Batas_bawah)</th>
                                        <th scope="col">Q(Batas_tengah)</th>
                                        <th scope="col">Z(Batas_atas)</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($bobot as $b) : ?>
                                        <?php if ($b['id_dimensi'] == 1) : ?>
                                            <tr>
                                                <td><?= $b['var_linguistik']; ?></td>
                                                <td><?= $b['Y']; ?></td>
                                                <td><?= $b['Q']; ?></td>
                                                <td><?= $b['Z']; ?></td>
                                                <td>
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#editModal<?= $b['id_bobot']; ?>"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="<?= base_url('datamaster/deleteFuzzy/') . $b['id_bobot']; ?>"><i class="bi bi-trash-fill"></i></a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                        </div>
                        <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Var_linguistik</th>
                                        <th scope="col">Y(Batas_bawah)</th>
                                        <th scope="col">Q(Batas_tengah)</th>
                                        <th scope="col">Z(Batas_atas)</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($bobot as $b) : ?>
                                        <?php if ($b['id_dimensi'] == 2) : ?>
                                            <tr>
                                                <td><?= $b['var_linguistik']; ?></td>
                                                <td><?= $b['Y']; ?></td>
                                                <td><?= $b['Q']; ?></td>
                                                <td><?= $b['Z']; ?></td>
                                                <td>
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#editModal<?= $b['id_bobot']; ?>"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="<?= base_url('datamaster/deleteFuzzy/') . $b['id_bobot']; ?>"><i class="bi bi-trash-fill"></i></a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                        </div>
                        <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Var_linguistik</th>
                                        <th scope="col">Y(Batas_bawah)</th>
                                        <th scope="col">Q(Batas_tengah)</th>
                                        <th scope="col">Z(Batas_atas)</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($bobot as $b) : ?>
                                        <?php if ($b['id_dimensi'] == 3) : ?>
                                            <tr>
                                                <td><?= $b['var_linguistik']; ?></td>
                                                <td><?= $b['Y']; ?></td>
                                                <td><?= $b['Q']; ?></td>
                                                <td><?= $b['Z']; ?></td>
                                                <td>
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#editModal<?= $b['id_bobot']; ?>"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="<?= base_url('datamaster/deleteFuzzy/') . $b['id_bobot']; ?>"><i class="bi bi-trash-fill"></i></a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                        </div>
                    </div>
                    <!-- End Default Tabs -->
                </div>
            </div>
        </div>
    </section>
    <!-- end Section Dimensi -->

    <!-- Section Kecanduan -->
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel <?= $subtitle; ?> Tingkat Kecanduan</h5>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col-4">Tingkat Kecanduan</th>
                                <th scope="col">Skor Min</th>
                                <th scope="col">Skor Maks</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kecanduan as $k) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $k['tingkat_kecanduan']; ?></td>
                                    <td><?= $k['batas_bawah']; ?></td>
                                    <td><?= $k['batas_atas']; ?></td>
                                    <td>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#editFuzzy<?= $k['id_tingkat_kecanduan']; ?>"><i class="bi bi-pencil-square"></i></a>
                                        <a href="<?= base_url('datamaster/deleteFuzzyKecanduan/') . $k['id_tingkat_kecanduan']; ?>"><i class="bi bi-trash-fill"></i></a>
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
    <!-- End Section Kecanduan -->
</main><!-- End main -->

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Tingkat Variabel Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('datamaster/fuzzy'); ?>" method="POST">
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-4 col-form-label">Nama Tingkatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama tingkat variabel">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="batas_bawah" class="col-sm-4 col-form-label">Batas Bawah</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="batas_bawah" name="batas_bawah">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="batas_tengah" class="col-sm-4 col-form-label">Batas Tengah</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="batas_tengah" name="batas_tengah">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="batas_atas" class="col-sm-4 col-form-label">Batas Atas</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="batas_atas" name="batas_atas">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="id_dimensi" class="col-sm-4 col-form-label">Variabel</label>
                        <div class="col-sm-8">
                            <select name="id_dimensi" id="id_dimensi" class="col-sm-6 col-form-label">
                                <option value="">Variabel</option>
                                <?php foreach ($dimensi as $d) : ?>
                                    <option value="<?= $d['id_dimensi']; ?>"><?= $d['nama_dimensi']; ?></option>
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
foreach ($bobot as $b) : $no++;
?>
    <div class="modal fade" id="editModal<?= $b['id_bobot']; ?>" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Tingkat Variabel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('datamaster/editFuzzy'); ?>" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="<?= $b['id_bobot']; ?>">
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-4 col-form-label">Nama Tingkatan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $b['var_linguistik']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="batas_bawah" class="col-sm-4 col-form-label">Batas Bawah</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="batas_bawah" name="batas_bawah" value="<?= $b['Y']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="batas_tengah" class="col-sm-4 col-form-label">Batas Tengah</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="batas_tengah" name="batas_tengah" value="<?= $b['Q']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="batas_atas" class="col-sm-4 col-form-label">Batas Atas</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="batas_atas" name="batas_atas" value="<?= $b['Z']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="id_dimensi" class="col-sm-4 col-form-label">Variabel</label>
                            <div class="col-sm-8">
                                <select name="id_dimensi" id="id_dimensi" class="col-sm-6 col-form-label">
                                    <option value="<?= $b['id_dimensi']; ?>">Variabel</option>
                                    <?php foreach ($dimensi as $d) : ?>
                                        <option value="<?= $d['id_dimensi']; ?>"><?= $d['nama_dimensi']; ?></option>
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

<!-- Add Fuzzy -->
<div class="modal fade" id="addFuzzy" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Tingkat Kecanduan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('datamaster/fuzzyKecanduan'); ?>" method="POST">
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

<!-- Edit Fuzzy -->
<?php $angka = 1;
foreach ($kecanduan as $k) : $angka++;
?>
    <div class="modal fade" id="editFuzzy<?= $k['id_tingkat_kecanduan']; ?>" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Tingkat Kecanduan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('datamaster/editFuzzyKecanduan'); ?>" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="<?= $k['id_tingkat_kecanduan']; ?>">
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-4 col-form-label">Nama Tingkatan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $k['tingkat_kecanduan'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="batas_bawah" class="col-sm-4 col-form-label">Batas Bawah</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="batas_bawah" name="batas_bawah" value="<?= $k['batas_bawah']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="batas_atas" class="col-sm-4 col-form-label">Batas Atas</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="batas_atas" name="batas_atas" value="<?= $k['batas_atas']; ?>">
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