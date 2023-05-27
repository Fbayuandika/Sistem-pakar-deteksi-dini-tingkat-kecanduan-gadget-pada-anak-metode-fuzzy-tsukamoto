<main class="bg-custom">
    <h1 class="h1 d-flex justify-content-center pt-3">DIGITAL ADDICTION PROGRAM</h1>
    <div class="container mw-100 d-flex justify-content-center pt-5">
        <div class="text-center">

            <div class="card mw-100">
                <div class="card-body p-4 ">
                    <h3>
                        Tingkat Kecanduanmu <br />
                        "<?= $skor['tingkat_kecanduan']; ?>"
                    </h3>

                    <div class="card-footer bg-white">
                        <h5 class="text-centet">SKOR ANDA</h5>
                        <h5 class="text-centet"><?= $skor['skor_pakar'] ?>/80</h5>
                    </div>
                    <p>Pesan :<br>
                        <?php foreach ($pakar as $pesan) : ?>
                            <?php if ($skor['tingkat_kecanduan'] == $pesan['tingkat_kecanduan']) : ?>
                                <?= $pesan['pesan']; ?>
                            <?php endif ?>
                        <?php endforeach ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>