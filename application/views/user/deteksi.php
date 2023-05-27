<main class="bg-custom">
    <h1 class="h1 d-flex justify-content-center pt-3">DIGITAL ADDICTION PROGRAM</h1>
    <div class="container h-100 d-flex justify-content-center pt-5">
        <div class="text-center">
            <div class="card p-2">
                <form action="<?= base_url('user/deteksi'); ?>" method="POST">
                    <div class="card-body">
                        <h3>BIODATA</h3>
                        <div class="d-flex mb-2">
                            <label for="nama" class="me-4 fs-5">NAMA</label>
                            <input type="text" class="form-control rounded-pill" id="nama" name="nama" aria-describedby="emailHelp" />
                        </div>
                        <div class="d-flex mb-2">
                            <label for="umur" class="me-4 fs-5">UMUR</label>
                            <input type="text" class="form-control rounded-pill" id="umur" name="umur" aria-describedby="emailHelp" />
                        </div>
                        <div class="d-flex mb-2">
                            <label for="jenis_kelamin" class="me-4 fs-5">JENIS KELAMIN</label>
                            <select class="py-2 px-5 rounded-pill" name="jenis_kelamin" id="jenis_kelamin">
                                <option value="">Campuran</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-laki">Laki-laki</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-lg btn-success btn-primer">Mulai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>