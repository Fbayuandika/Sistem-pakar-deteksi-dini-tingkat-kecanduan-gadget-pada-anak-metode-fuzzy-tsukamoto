<main class="bg-custom">
    <h1 class="h1 d-flex justify-content-center pt-3">DIGITAL ADDICTION PROGRAM</h1>
    <div class="container h-100 d-flex justify-content-center pt-5">
        <div class="text-center">
            <form action="<?= base_url('user/hitung/' . $user['nama'] . '/' . $pertanyaan['id_pertanyaan']) ?>" method="POST">
                <div class="card p-4" id="quiz">
                    <div class="card-body text-start">
                        <h3>Pernyataan <?= $pertanyaan['id_pertanyaan']; ?>:</h3>
                        <input type="hidden" name="id_dimensi" id="id_dimensi" class="id_dimensi" value="<?= $pertanyaan['id_dimensi']; ?>">
                        <!-- Radio Button 1 -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bobot" id="exampleRadios1" class="bobot" value="<?= $pertanyaan['bobot1']; ?>" />
                            <label class="form-check-label" for="exampleRadios1">
                                <?= $pertanyaan['pernyataan1']; ?>
                            </label>
                        </div>

                        <!-- Radio Button 2 -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bobot" id="exampleRadios2" class="bobot" value="<?= $pertanyaan['bobot2']; ?>" />
                            <label class="form-check-label" for="exampleRadios2">
                                <?= $pertanyaan['pernyataan2']; ?>
                            </label>
                        </div>

                        <!-- Radio Button 3 -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bobot" id="exampleRadios3" class="bobot" value="<?= $pertanyaan['bobot3']; ?>" />
                            <label class="form-check-label" for="exampleRadios3">
                                <?= $pertanyaan['pernyataan3']; ?>
                            </label>
                        </div>

                        <!-- Radio Button 4 -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bobot" id="exampleRadios4" class="bobot" value="<?= $pertanyaan['bobot4']; ?>" />
                            <label class="form-check-label" for="exampleRadios4">
                                <?= $pertanyaan['pernyataan4']; ?>
                            </label>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <?php if ($pertanyaan['id_pertanyaan'] < 20) : ?>
                            <button type="submit" class="btn btn-lg btn-success">
                                NEXT
                            </button>
                        <?php else : ?>
                            <button type="submit" class="btn btn-lg btn-success">
                                SUBMIT
                            </button>
                        <?php endif ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>