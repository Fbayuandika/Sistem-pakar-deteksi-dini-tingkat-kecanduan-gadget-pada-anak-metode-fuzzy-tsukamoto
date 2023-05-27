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
                            <h5 class="card-title">Tambah Pertanyaan</h5>
                        </div>
                        <form action="<?= base_url('datamaster/addPertanyaan'); ?>" method="POST">
                            <div class="form-body">
                                <div class="row mb-3">
                                    <label for="pernyataan1" class="col-sm-3 col-form-label">Pernyataan 1 / Bobot 1</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="pernyataan1" name="pernyataan1" placeholder="Masukkan pernyataan pertama">
                                    </div>
                                    <select class="col-sm-1" name="bobot1" id="bobot1">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <label for="pernyataan2" class="col-sm-3 col-form-label">Pernyataan 2 / Bobot 2</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="pernyataan2" name="pernyataan2" placeholder="Masukkan pernyataan kedua">
                                    </div>
                                    <select class="col-sm-1" name="bobot2" id="bobot2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <label for="pernyataan3" class="col-sm-3 col-form-label">Pertanyaan 3 / Bobot 3</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="pernyataan3" name="pernyataan3" placeholder="Masukkan pernyataan ketiga">
                                    </div>
                                    <select class="col-sm-1" name="bobot3" id="bobot3">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <label for="pernyataan4" class="col-sm-3 col-form-label">Pertanyaan 4 / Bobot 4</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="pernyataan4" name="pernyataan4" placeholder="Masukkan pernyataan keempat">
                                    </div>
                                    <select class="col-sm-1" name="bobot4" id="bobot4">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
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