<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $subtitle; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $title; ?></li>
                <li class="breadcrumb-item"><a href="<?= base_url('datamaster') ?>"><?= $subtitle; ?></a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <div class="card-body">
                        <div class="form-header">
                            <h5 class="card-title">Ubah Pertanyaan</h5>
                        </div>
                        <form action="<?= base_url('datamaster/editPertanyaan/') ?><?= $pertanyaan['id_pertanyaan']; ?>" method="POST">
                            <div class="form-body">
                                <div class="row mb-3">
                                    <label for="pernyataan1" class="col-sm-3 col-form-label">Pernyataan 1 / Bobot 1</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="pernyataan1" name="pernyataan1" value="<?= $pertanyaan['pernyataan1'] ?>">
                                    </div>
                                    <select class="col-sm-1" name="bobot1" id="bobot1">
                                        <option value="<?= $pertanyaan['bobot1'] ?>"><?= $pertanyaan['bobot1'] ?></option>
                                        <option value="<?= $pertanyaan['bobot4'] ?>"><?= $pertanyaan['bobot4'] ?></option>
                                        <option value="<?= $pertanyaan['bobot3'] ?>"><?= $pertanyaan['bobot3'] ?></option>
                                        <option value="<?= $pertanyaan['bobot2'] ?>"><?= $pertanyaan['bobot2'] ?></option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <label for="pernyataan2" class="col-sm-3 col-form-label">Pernyataan 2 / Bobot 2</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="pernyataan2" name="pernyataan2" value="<?= $pertanyaan['pernyataan2'] ?>">
                                    </div>
                                    <select class="col-sm-1" name="bobot2" id="bobot2">
                                        <option value="<?= $pertanyaan['bobot2'] ?>"><?= $pertanyaan['bobot2'] ?></option>
                                        <option value="<?= $pertanyaan['bobot4'] ?>"><?= $pertanyaan['bobot4'] ?></option>
                                        <option value="<?= $pertanyaan['bobot3'] ?>"><?= $pertanyaan['bobot3'] ?></option>
                                        <option value="<?= $pertanyaan['bobot1'] ?>"><?= $pertanyaan['bobot1'] ?></option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <label for="pernyataan3" class="col-sm-3 col-form-label">Pertanyaan 3 / Bobot 3</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="pernyataan3" name="pernyataan3" value="<?= $pertanyaan['pernyataan3'] ?>">
                                    </div>
                                    <select class="col-sm-1" name="bobot3" id="bobot3">
                                        <option value="<?= $pertanyaan['bobot3'] ?>"><?= $pertanyaan['bobot3'] ?></option>
                                        <option value="<?= $pertanyaan['bobot4'] ?>"><?= $pertanyaan['bobot4'] ?></option>
                                        <option value="<?= $pertanyaan['bobot2'] ?>"><?= $pertanyaan['bobot2'] ?></option>
                                        <option value="<?= $pertanyaan['bobot1'] ?>"><?= $pertanyaan['bobot1'] ?></option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <label for="pernyataan4" class="col-sm-3 col-form-label">Pertanyaan 4 / Bobot 4</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="pernyataan4" name="pernyataan4" value="<?= $pertanyaan['pernyataan4'] ?>">
                                    </div>
                                    <select class="col-sm-1" name="bobot4" id="bobot4">
                                        <option value="<?= $pertanyaan['bobot4'] ?>"><?= $pertanyaan['bobot4'] ?></option>
                                        <option value="<?= $pertanyaan['bobot3'] ?>"><?= $pertanyaan['bobot3'] ?></option>
                                        <option value="<?= $pertanyaan['bobot2'] ?>"><?= $pertanyaan['bobot2'] ?></option>
                                        <option value="<?= $pertanyaan['bobot1'] ?>"><?= $pertanyaan['bobot1'] ?></option>>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <label for="id_dimensi" class="col-sm-3 col-form-label padding-left">Variabel Pendukung</label>
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
                            <div class="form-footer justify-content-flex-end">
                                <a href="<?= base_url('datamaster/pertanyaan') ?>" type="button" class="btn btn-secondary">Tutup</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>