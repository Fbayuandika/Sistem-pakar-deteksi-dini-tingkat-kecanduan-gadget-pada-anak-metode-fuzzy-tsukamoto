<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $subtitle; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $title; ?></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('datamaster') ?>"><?= $subtitle; ?></a></li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tabel Penjabaran</h5>
                        <!-- Default Tabs -->
                        <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">Hasil Jawaban</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">Perhitungan Pakar</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="false">Fuzzy Tsukamoto</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="myTabjustifiedContent">
                            <!-- Tabs Hasil Jawaban -->
                            <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                                <h5 class="text-center p-1">Biodata dan Hasil Jawaban</h5>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Nama : <?= $user['nama'] ?> <br>
                                                Umur : <?= $user['umur'] ?> Tahun <br>
                                                Jenis Kelamin : <?= $user['jenis_kelamin'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Pernyataan yang dipilih :</h6>
                                                <?php $aku = 1; ?>
                                                <?php foreach ($jawaban as $answer) : ?>
                                                    <?php if ($answer['dimensi1'] != 0) : ?>
                                                        <?= $aku ?>.
                                                        <?php if ($answer['dimensi1'] == $pertanyaan[$aku - 1]['bobot1']) : ?>
                                                            <?= $pertanyaan[$aku - 1]['pernyataan1'] ?>
                                                        <?php elseif ($answer['dimensi1'] == $pertanyaan[$aku - 1]['bobot2']) : ?>
                                                            <?= $pertanyaan[$aku - 1]['pernyataan2'] ?>
                                                        <?php elseif ($answer['dimensi1'] == $pertanyaan[$aku - 1]['bobot3']) : ?>
                                                            <?= $pertanyaan[$aku - 1]['pernyataan3'] ?>
                                                        <?php else : ?>
                                                            <?= $pertanyaan[$aku - 1]['pernyataan4'] ?>
                                                        <?php endif ?><br>
                                                        <?php $aku++; ?>
                                                    <?php elseif ($answer['dimensi2'] != 0) : ?>
                                                        <?= $aku ?>.
                                                        <?php if ($answer['dimensi2'] == $pertanyaan[$aku - 1]['bobot1']) : ?>
                                                            <?= $pertanyaan[$aku - 1]['pernyataan1'] ?>
                                                        <?php elseif ($answer['dimensi2'] == $pertanyaan[$aku - 1]['bobot2']) : ?>
                                                            <?= $pertanyaan[$aku - 1]['pernyataan2'] ?>
                                                        <?php elseif ($answer['dimensi2'] == $pertanyaan[$aku - 1]['bobot3']) : ?>
                                                            <?= $pertanyaan[$aku - 1]['pernyataan3'] ?>
                                                        <?php else : ?>
                                                            <?= $pertanyaan[$aku - 1]['pernyataan4'] ?>
                                                        <?php endif ?><br>
                                                        <?php $aku++; ?>
                                                    <?php elseif ($answer['dimensi3'] != 0) : ?>
                                                        <?= $aku ?>.
                                                        <?php if ($answer['dimensi3'] == $pertanyaan[$aku - 1]['bobot1']) : ?>
                                                            <?= $pertanyaan[$aku - 1]['pernyataan1'] ?>
                                                        <?php elseif ($answer['dimensi3'] == $pertanyaan[$aku - 1]['bobot2']) : ?>
                                                            <?= $pertanyaan[$aku - 1]['pernyataan2'] ?>
                                                        <?php elseif ($answer['dimensi3'] == $pertanyaan[$aku - 1]['bobot3']) : ?>
                                                            <?= $pertanyaan[$aku - 1]['pernyataan3'] ?>
                                                        <?php else : ?>
                                                            <?= $pertanyaan[$aku - 1]['pernyataan4'] ?>
                                                        <?php endif ?><br>
                                                        <?php $aku++; ?>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <!-- End Tabs -->
                            <!-- Tabs Perhitungan Pakar -->
                            <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                                <h5 class="text-center p-1">Keterangan</h5>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6>Jawaban</h6>
                                                1. Selalu = 4 Poin <br>
                                                2. Sering = 3 Poin <br>
                                                3. Kadang-kadang = 2 Poin <br>
                                                4. Tidak Pernah = 1 Poin <br>
                                            </td>
                                            <td>
                                                <h6>Tingkat Kecanduan</h6>
                                                1. Normal = 20 - 29 Poin <br>
                                                2. Kecanduan Ringan = 30 - 39 Poin <br>
                                                3. Kecanduan Sedang = 40 - 49 Poin <br>
                                                4. Kecanduan Berat = 50 - 80 Poin <br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h5 class="text-center p-1">Tahap Pengurutan Sesuai Variabel</h5>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6>Pernyataan Variabel Aktifitas Fisik :</h6>
                                                <?php $dia = 1; ?>
                                                <?php foreach ($jawaban as $answer) : ?>
                                                    <?php if ($answer['dimensi1'] != 0) : ?>
                                                        <?= $dia ?>.
                                                        <?php if ($answer['dimensi1'] == $pertanyaan[$dia - 1]['bobot1']) : ?>
                                                            <?= $pertanyaan[$dia - 1]['pernyataan1'] ?> = <?= $answer['dimensi1'] ?> poin
                                                        <?php elseif ($answer['dimensi1'] == $pertanyaan[$dia - 1]['bobot2']) : ?>
                                                            <?= $pertanyaan[$dia - 1]['pernyataan2'] ?> = <?= $answer['dimensi1'] ?> poin
                                                        <?php elseif ($answer['dimensi1'] == $pertanyaan[$dia - 1]['bobot3']) : ?>
                                                            <?= $pertanyaan[$dia - 1]['pernyataan3'] ?> = <?= $answer['dimensi1'] ?> poin
                                                        <?php else : ?>
                                                            <?= $pertanyaan[$dia - 1]['pernyataan4'] ?> = <?= $answer['dimensi1'] ?> poin
                                                        <?php endif ?><br>
                                                    <?php endif ?>
                                                    <?php $dia++; ?>
                                                <?php endforeach ?> <br>
                                                Maka total =
                                                <?php $dia = 0; ?>
                                                <?php $total = 0; ?>
                                                <?php foreach ($jawaban as $answer) : ?>
                                                    <?php if ($answer['dimensi1'] != 0) : ?>
                                                        <?php if ($dia == 0) : ?>
                                                            <?= $answer['dimensi1'] ?>
                                                            <?php $dia++; ?>
                                                        <?php else : ?>
                                                            + <?= $answer['dimensi1'] ?>
                                                            <?php $dia++; ?>
                                                        <?php endif ?>
                                                        <?php $total += $answer['dimensi1'] ?>
                                                    <?php endif ?>
                                                <?php endforeach ?> = <?= $total ?> poin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Pernyataan Variabel Emosional :</h6>
                                                <?php $dia = 1; ?>
                                                <?php foreach ($jawaban as $answer) : ?>
                                                    <?php if ($answer['dimensi2'] != 0) : ?>
                                                        <?= $dia ?>.
                                                        <?php if ($answer['dimensi2'] == $pertanyaan[$dia - 1]['bobot1']) : ?>
                                                            <?= $pertanyaan[$dia - 1]['pernyataan1'] ?> = <?= $answer['dimensi2'] ?> poin
                                                        <?php elseif ($answer['dimensi2'] == $pertanyaan[$dia - 1]['bobot2']) : ?>
                                                            <?= $pertanyaan[$dia - 1]['pernyataan2'] ?> = <?= $answer['dimensi2'] ?> poin
                                                        <?php elseif ($answer['dimensi2'] == $pertanyaan[$dia - 1]['bobot3']) : ?>
                                                            <?= $pertanyaan[$dia - 1]['pernyataan3'] ?> = <?= $answer['dimensi2'] ?> poin
                                                        <?php else : ?>
                                                            <?= $pertanyaan[$dia - 1]['pernyataan4'] ?> = <?= $answer['dimensi2'] ?> poin
                                                        <?php endif ?><br>
                                                    <?php endif ?>
                                                    <?php $dia++; ?>
                                                <?php endforeach ?> <br>
                                                Maka total =
                                                <?php $dia = 0; ?>
                                                <?php $total = 0; ?>
                                                <?php foreach ($jawaban as $answer) : ?>
                                                    <?php if ($answer['dimensi2'] != 0) : ?>
                                                        <?php if ($dia == 0) : ?>
                                                            <?= $answer['dimensi2'] ?>
                                                            <?php $dia++; ?>
                                                        <?php else : ?>
                                                            + <?= $answer['dimensi2'] ?>
                                                            <?php $dia++; ?>
                                                        <?php endif ?>
                                                        <?php $total += $answer['dimensi2'] ?>
                                                    <?php endif ?>
                                                <?php endforeach ?> = <?= $total ?> poin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Pernyataan Variabel Interaksi Sosial :</h6>
                                                <?php $dia = 1; ?>
                                                <?php foreach ($jawaban as $answer) : ?>
                                                    <?php if ($answer['dimensi3'] != 0) : ?>
                                                        <?= $dia ?>.
                                                        <?php if ($answer['dimensi3'] == $pertanyaan[$dia - 1]['bobot3']) : ?>
                                                            <?= $pertanyaan[$dia - 1]['pernyataan1'] ?> = <?= $answer['dimensi3'] ?> poin
                                                        <?php elseif ($answer['dimensi3'] == $pertanyaan[$dia - 1]['bobot2']) : ?>
                                                            <?= $pertanyaan[$dia - 1]['pernyataan2'] ?> = <?= $answer['dimensi3'] ?> poin
                                                        <?php elseif ($answer['dimensi3'] == $pertanyaan[$dia - 1]['bobot3']) : ?>
                                                            <?= $pertanyaan[$dia - 1]['pernyataan3'] ?> = <?= $answer['dimensi3'] ?> poin
                                                        <?php else : ?>
                                                            <?= $pertanyaan[$dia - 1]['pernyataan4'] ?> = <?= $answer['dimensi3'] ?> poin
                                                        <?php endif ?><br>
                                                    <?php endif ?>
                                                    <?php $dia++; ?>
                                                <?php endforeach ?> <br>
                                                Maka total =
                                                <?php $dia = 0; ?>
                                                <?php $total = 0; ?>
                                                <?php foreach ($jawaban as $answer) : ?>
                                                    <?php if ($answer['dimensi3'] != 0) : ?>
                                                        <?php if ($dia == 0) : ?>
                                                            <?= $answer['dimensi3'] ?>
                                                            <?php $dia++; ?>
                                                        <?php else : ?>
                                                            + <?= $answer['dimensi3'] ?>
                                                            <?php $dia++; ?>
                                                        <?php endif ?>
                                                        <?php $total += $answer['dimensi3'] ?>
                                                    <?php endif ?>
                                                <?php endforeach ?> = <?= $total ?> poin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5>Hasil Test</h5>
                                                Aktifitas Fisik : <?= $nilai['dimensi1'] ?><br>
                                                Emosional : <?= $nilai['dimensi2'] ?><br>
                                                Interaksi Sosial : <?= $nilai['dimensi3'] ?><br>
                                                <h6 class="mt-1">Total Skor : <?= $nilai['dimensi1'] ?> + <?= $nilai['dimensi2'] ?> + <?= $nilai['dimensi3'] ?> = <?= $nilai['skor_pakar'] ?></h6><br>
                                                <h5>Tingat Kecanduan : <?= $skor['tingkat_kecanduan']; ?></h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Tabs -->
                            <!-- Tabs Fuzzy Tsukamoto -->
                            <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
                                <!-- Fuzzifikasi -->
                                <h5 class="text-center mt-2">Prosess Fuzzifikasi</h5>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center"></th>
                                            <th scope="col" class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Karena skor Aktifitas Fisik adalah <?= $nilai['dimensi1'] ?> poin, maka hasilnya :</p>
                                                <?php foreach ($dimensi1 as $dim1) : ?>
                                                    <?php if ($dim1['var_linguistik'] == 'Normal') : ?>
                                                        <?php if ($nilai['dimensi1'] <= $dim1['Y']) : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = 1</p>
                                                        <?php elseif ($nilai['dimensi1'] >= $dim1['Z']) : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = 0</p>
                                                        <?php else : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = (<?= $dim1['Z'] ?> - <?= $nilai['dimensi1'] ?>) / (<?= $dim1['Z'] ?> - <?= $dim1['Y'] ?>) = <?= ($dim1['Z'] - $nilai['dimensi1']) / ($dim1['Z'] - $dim1['Y']) ?></p>
                                                        <?php endif ?>
                                                    <?php endif ?>
                                                    <?php if ($dim1['var_linguistik'] == 'Ringan') : ?>
                                                        <?php if ($nilai['dimensi1'] <= $dim1['Y']) : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = 0</p>
                                                        <?php elseif ($nilai['dimensi1'] >= $dim1['Y'] && $nilai['dimensi1'] <= $dim1['Q']) : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = (<?= $nilai['dimensi1'] ?> - <?= $dim1['Y'] ?>) / (<?= $dim1['Q'] ?> - <?= $dim1['Y'] ?>) = <?= ($nilai['dimensi1'] - $dim1['Y']) / ($dim1['Q'] - $dim1['Y']) ?></p>
                                                        <?php elseif ($nilai['dimensi1'] >= $dim1['Q'] && $nilai['dimensi1'] <= $dim1['Z']) : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = (<?= $dim1['Z'] ?> - <?= $nilai['dimensi1'] ?>) / (<?= $dim1['Z'] ?> - <?= $dim1['Q'] ?>) = <?= ($dim1['Z'] - $nilai['dimensi1']) / ($dim1['Z'] - $dim1['Q']) ?></p>
                                                        <?php else : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = 0</p>
                                                        <?php endif ?>
                                                    <?php endif ?>
                                                    <?php if ($dim1['var_linguistik'] == 'Sedang') : ?>
                                                        <?php if ($nilai['dimensi1'] <= $dim1['Y']) : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = 0</p>
                                                        <?php elseif ($nilai['dimensi1'] >= $dim1['Y'] && $nilai['dimensi1'] <= $dim1['Q']) : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = (<?= $nilai['dimensi1'] ?> - <?= $dim1['Y'] ?>) / (<?= $dim1['Q'] ?> - <?= $dim1['Y'] ?>) = <?= ($nilai['dimensi1'] - $dim1['Y']) / ($dim1['Q'] - $dim1['Y']) ?></p>
                                                        <?php elseif ($nilai['dimensi1'] >= $dim1['Q'] && $nilai['dimensi1'] <= $dim1['Z']) : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = (<?= $dim1['Z'] ?> - <?= $nilai['dimensi1'] ?>) / (<?= $dim1['Z'] ?> - <?= $dim1['Q'] ?>) = <?= ($dim1['Z'] - $nilai['dimensi1']) / ($dim1['Z'] - $dim1['Q']) ?></p>
                                                        <?php else : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = 0</p>
                                                        <?php endif ?>
                                                    <?php endif ?>
                                                    <?php if ($dim1['var_linguistik'] == 'Berat') : ?>
                                                        <?php if ($nilai['dimensi1'] <= $dim1['Y']) : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = 0</p>
                                                        <?php elseif ($nilai['dimensi1'] >= $dim1['Z']) : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = 1</p>
                                                        <?php else : ?>
                                                            <p><?= $dim1['var_linguistik'] ?> = (<?= $dim1['Z'] ?> - <?= $nilai['dimensi1'] ?> ) / (<?= $dim1['Z'] ?> - <?= $dim1['Y'] ?>) = <?= ($dim1['Z'] - $nilai['dimensi1']) / ($dim1['Z'] - $dim1['Y']) ?></p>
                                                        <?php endif ?>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            </td>
                                            <td>
                                                <p>Skor Emosional adalah <?= $nilai['dimensi2'] ?> poin, maka hasilnya :</p>
                                                <?php foreach ($dimensi2 as $dim2) : ?>
                                                    <?php if ($dim2['var_linguistik'] == 'Normal') : ?>
                                                        <?php if ($nilai['dimensi2'] <= $dim2['Y']) : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = 1</p>
                                                        <?php elseif ($nilai['dimensi2'] >= $dim2['Z']) : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = 0</p>
                                                        <?php else : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = (<?= $dim2['Z'] ?> - <?= $nilai['dimensi2'] ?> ) / (<?= $dim2['Z'] ?> - <?= $dim2['Y'] ?> ) = <?= ($dim2['Z'] - $nilai['dimensi2']) / ($dim2['Z'] - $dim2['Y']) ?></p>
                                                        <?php endif ?>
                                                    <?php endif ?>
                                                    <?php if ($dim2['var_linguistik'] == 'Ringan') : ?>
                                                        <?php if ($nilai['dimensi2'] <= $dim2['Y']) : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = 0</p>
                                                        <?php elseif ($nilai['dimensi2'] >= $dim2['Y'] && $nilai['dimensi2'] <= $dim2['Q']) : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = (<?= $nilai['dimensi2'] ?> - <?= $dim2['Y'] ?>) / (<?= $dim2['Q'] ?> - <?= $dim2['Y'] ?> ) = <?= ($nilai['dimensi2'] - $dim2['Y']) / ($dim2['Q'] - $dim2['Y']) ?></p>
                                                        <?php elseif ($nilai['dimensi2'] >= $dim2['Q'] && $nilai['dimensi2'] <= $dim2['Z']) : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = (<?= $dim2['Z'] ?> - <?= $nilai['dimensi2'] ?>) / (<?= $dim2['Z'] ?> - <?= $dim2['Q'] ?> ) = <?= ($dim2['Z'] - $nilai['dimensi2']) / ($dim2['Z'] - $dim2['Q']) ?></p>
                                                        <?php else : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = 0</p>
                                                        <?php endif ?>
                                                    <?php endif ?>
                                                    <?php if ($dim2['var_linguistik'] == 'Sedang') : ?>
                                                        <?php if ($nilai['dimensi2'] <= $dim2['Y']) : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = 0</p>
                                                        <?php elseif ($nilai['dimensi2'] >= $dim2['Y'] && $nilai['dimensi2'] <= $dim2['Q']) : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = (<?= $nilai['dimensi2'] ?> - <?= $dim2['Y'] ?>) / (<?= $dim2['Q'] ?> - <?= $dim2['Y'] ?> ) = <?= ($nilai['dimensi2'] - $dim2['Y']) / ($dim2['Q'] - $dim2['Y']) ?></p>
                                                        <?php elseif ($nilai['dimensi2'] >= $dim2['Q'] && $nilai['dimensi2'] <= $dim2['Z']) : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = (<?= $dim2['Z'] ?> - <?= $nilai['dimensi2'] ?>) / (<?= $dim2['Z'] ?> - <?= $dim2['Q'] ?> ) = <?= ($dim2['Z'] - $nilai['dimensi2']) / ($dim2['Z'] - $dim2['Q']) ?></p>
                                                        <?php else : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = 0</p>
                                                        <?php endif ?>
                                                    <?php endif ?>
                                                    <?php if ($dim2['var_linguistik'] == 'Berat') : ?>
                                                        <?php if ($nilai['dimensi2'] <= $dim2['Y']) : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = 0</p>
                                                        <?php elseif ($nilai['dimensi2'] >= $dim2['Z']) : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = 1</p>
                                                        <?php else : ?>
                                                            <p><?= $dim2['var_linguistik'] ?> = (<?= $dim2['Z'] ?> - <?= $nilai['dimensi2'] ?> ) / (<?= $dim2['Z'] ?> - <?= $dim2['Y'] ?> ) = <?= ($dim2['Z'] - $nilai['dimensi2']) / ($dim2['Z'] - $dim2['Y']) ?></p>
                                                        <?php endif ?>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Skor Interaksi Sosial adalah <?= $nilai['dimensi3'] ?> poin, maka hasilnya</p>
                                                <?php foreach ($dimensi3 as $dim3) : ?>
                                                    <?php if ($dim3['var_linguistik'] == 'Normal') : ?>
                                                        <?php if ($nilai['dimensi3'] <= $dim3['Y']) : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = 1</p>
                                                        <?php elseif ($nilai['dimensi3'] >= $dim3['Z']) : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = 0</p>
                                                        <?php else : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = (<?= $dim3['Z'] ?> - <?= $nilai['dimensi3'] ?> ) / (<?= $dim3['Z'] ?> - <?= $dim3['Y'] ?> ) = <?= ($dim3['Z'] - $nilai['dimensi3']) / ($dim3['Z'] - $dim3['Y']) ?></p>
                                                        <?php endif ?>
                                                    <?php endif ?>
                                                    <?php if ($dim3['var_linguistik'] == 'Ringan') : ?>
                                                        <?php if ($nilai['dimensi3'] <= $dim3['Y']) : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = 0</p>
                                                        <?php elseif ($nilai['dimensi3'] >= $dim3['Y'] && $nilai['dimensi3'] <= $dim3['Q']) : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = (<?= $nilai['dimensi3'] ?> - <?= $dim3['Y'] ?>) / (<?= $dim3['Q'] ?> - <?= $dim3['Y'] ?> ) = <?= ($nilai['dimensi3'] - $dim3['Y']) / ($dim3['Q'] - $dim3['Y']) ?></p>
                                                        <?php elseif ($nilai['dimensi3'] >= $dim3['Q'] && $nilai['dimensi3'] <= $dim3['Z']) : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = (<?= $dim3['Z'] ?> - <?= $nilai['dimensi3'] ?>) / (<?= $dim3['Z'] ?> - <?= $dim3['Q'] ?> ) = <?= ($dim3['Z'] - $nilai['dimensi3']) / ($dim3['Z'] - $dim3['Q']) ?></p>
                                                        <?php else : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = 0</p>
                                                        <?php endif ?>
                                                    <?php endif ?>
                                                    <?php if ($dim3['var_linguistik'] == 'Sedang') : ?>
                                                        <?php if ($nilai['dimensi3'] <= $dim3['Y']) : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = 0</p>
                                                        <?php elseif ($nilai['dimensi3'] >= $dim3['Y'] && $nilai['dimensi3'] <= $dim3['Q']) : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = (<?= $nilai['dimensi3'] ?> - <?= $dim3['Y'] ?>) / (<?= $dim3['Q'] ?> - <?= $dim3['Y'] ?> ) = <?= ($nilai['dimensi3'] - $dim3['Y']) / ($dim3['Q'] - $dim3['Y']) ?></p>
                                                        <?php elseif ($nilai['dimensi3'] >= $dim3['Q'] && $nilai['dimensi3'] <= $dim3['Z']) : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = (<?= $dim3['Z'] ?> - <?= $nilai['dimensi3'] ?>) / (<?= $dim3['Z'] ?> - <?= $dim3['Q'] ?> ) = <?= ($dim3['Z'] - $nilai['dimensi3']) / ($dim3['Z'] - $dim3['Q']) ?></p>
                                                        <?php else : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = 0</p>
                                                        <?php endif ?>
                                                    <?php endif ?>
                                                    <?php if ($dim3['var_linguistik'] == 'Berat') : ?>
                                                        <?php if ($nilai['dimensi3'] <= $dim3['Y']) : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = 0</p>
                                                        <?php elseif ($nilai['dimensi3'] >= $dim3['Z']) : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = 1</p>
                                                        <?php else : ?>
                                                            <p><?= $dim3['var_linguistik'] ?> = (<?= $dim3['Z'] ?> - <?= $nilai['dimensi3'] ?> ) / (<?= $dim3['Z'] ?> - <?= $dim3['Y'] ?> ) = <?= ($dim3['Z'] - $nilai['dimensi3']) / ($dim3['Z'] - $dim3['Y']) ?></p>
                                                        <?php endif ?>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            </td>
                                            <td>
                                                <p>Dari langkah-langkah tersebut telah didapatkan <?= count($aturan) ?> aturan, sebagai berikut:</p>
                                                <?php $a = 1; ?>
                                                <?php foreach ($aturan as $rule) : ?>
                                                    <p><?= $a; ?>. <?= $rule['dimensi1']; ?> AND <?= $rule['dimensi2']; ?> AND <?= $rule['dimensi3']; ?> &nbsp; (<?= $rule['bobot1']; ?>,<?= $rule['bobot2']; ?>,<?= $rule['bobot3']; ?>)</p>
                                                    <?php $a++; ?>
                                                <?php endforeach ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Fuzzifikasi -->
                                <!-- Defuzzifikasi -->
                                <h5 class="text-center p-2">Prosess Defuzzifikasi</h5>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Setelah itu dilakukan pengecekan pada Rule atau Aturan yang telah dibuat, maka hasilnya adalah sebagai berikut:</p>
                                                <?php $b = 1; ?>
                                                <?php foreach ($val as $v) : ?>
                                                    <p><?= $b; ?>.<?= $aturan[$b - 1]['dimensi1'] ?> (<?= $aturan[$b - 1]['bobot1'] ?>) AND <?= $aturan[$b - 1]['dimensi2'] ?> (<?= $aturan[$b - 1]['bobot2'] ?>) AND <?= $aturan[$b - 1]['dimensi3'] ?> (<?= $aturan[$b - 1]['bobot3'] ?>) = <?= $v['tingkat_kecanduan'] ?> (<?= $v['batas_bawah'] ?>,<?= $v['batas_atas'] ?>)</p>
                                                    <?php $b++; ?>
                                                <?php endforeach ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Kemudian langkah selanjutnya adalah menghitung nilai a-predikat dan z-score</p>
                                                <?php $c = 1; ?>
                                                <?php foreach ($val as $v) : ?>
                                                    <?php if ($v['tingkat_kecanduan'] == 'Normal') : ?>
                                                        <p>
                                                            a-predikat[<?= $c; ?>] = MIN(<?= $aturan[$c - 1]['bobot1'] ?>,<?= $aturan[$c - 1]['bobot2'] ?>,<?= $aturan[$c - 1]['bobot3'] ?>) = <?= $a_predikat[$c - 1] = min($aturan[$c - 1]['bobot1'], $aturan[$c - 1]['bobot2'], $aturan[$c - 1]['bobot3']) ?>
                                                        </p>
                                                        <p>
                                                            z[<?= $c; ?>] = -((<?= $a_predikat[$c - 1] ?> *
                                                            (<?= $v['batas_atas'] ?> - <?= $v['batas_bawah'] ?>)) - <?= $v['batas_atas'] ?>) =
                                                            <?= $hasil[$c - 1] = - ((($a_predikat[$c - 1]) * ($v['batas_atas'] - $v['batas_bawah'])) - $v['batas_atas']) ?>
                                                        </p>
                                                        <br>
                                                    <?php elseif ($v['tingkat_kecanduan'] == 'Ringan') : ?>
                                                        <p>
                                                            a-predikat[<?= $c; ?>] = MIN(<?= $aturan[$c - 1]['bobot1'] ?>,<?= $aturan[$c - 1]['bobot2'] ?>,<?= $aturan[$c - 1]['bobot3'] ?>) = <?= $a_predikat[$c - 1] = min($aturan[$c - 1]['bobot1'], $aturan[$c - 1]['bobot2'], $aturan[$c - 1]['bobot3']) ?>
                                                        </p>
                                                        <p>
                                                            z[<?= $c; ?>] = <?= $v['batas_atas'] ?> - (<?= $a_predikat[$c - 1] ?> * (<?= $v['batas_atas'] ?> - <?= $v['batas_bawah'] ?>))/2 =
                                                            <?= $hasil[$c - 1] = $v['batas_atas'] - ($a_predikat[$c - 1] * ($v['batas_atas']  - $v['batas_bawah'])) / 2;
                                                            ?>
                                                        </p>
                                                        <br>
                                                    <?php elseif ($v['tingkat_kecanduan'] == 'Sedang') : ?>
                                                        <p>
                                                            a-predikat[<?= $c; ?>] = MIN(<?= $aturan[$c - 1]['bobot1'] ?>,<?= $aturan[$c - 1]['bobot2'] ?>,<?= $aturan[$c - 1]['bobot3'] ?>) = <?= $a_predikat[$c - 1] = min($aturan[$c - 1]['bobot1'], $aturan[$c - 1]['bobot2'], $aturan[$c - 1]['bobot3']) ?>
                                                        </p>
                                                        <p>
                                                            z[<?= $c; ?>] = <?= $v['batas_atas'] ?> - (<?= $a_predikat[$c - 1] ?> * (<?= $v['batas_atas'] ?> - <?= $v['batas_bawah'] ?>))/2 =
                                                            <?= $hasil[$c - 1] = $v['batas_atas'] - ($a_predikat[$c - 1] * ($v['batas_atas']  - $v['batas_bawah'])) / 2;
                                                            ?>
                                                        </p>
                                                        <br>
                                                    <?php else : ?>
                                                        <p>
                                                            a-predikat[<?= $c; ?>] = MIN(<?= $aturan[$c - 1]['bobot1'] ?>,<?= $aturan[$c - 1]['bobot2'] ?>,<?= $aturan[$c - 1]['bobot3'] ?>) = <?= $a_predikat[$c - 1] = min($aturan[$c - 1]['bobot1'], $aturan[$c - 1]['bobot2'], $aturan[$c - 1]['bobot3']) ?>
                                                        </p>
                                                        <p>
                                                            z[<?= $c; ?>] = ((<?= $a_predikat[$c - 1] ?> * (<?= $v['batas_atas'] ?> - <?= $v['batas_bawah'] ?>)) + <?= $v['batas_bawah'] ?>) =
                                                            <?= $hasil[$c - 1] = (($a_predikat[$c - 1] * ($v['batas_atas'] - $v['batas_bawah'])) + $v['batas_bawah']) ?>
                                                        </p>
                                                    <?php endif ?>
                                                    <?php $c++; ?>
                                                <?php endforeach ?>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Setelah diperoleh a-predikat dan z-score pada setiap rule atau aturan, maka tahap terakhir adalah defuzzyfikasi. Nilai tegas (crisp) z dapat dicari
                                                    menggunakan rata-rata terbobot yaitu:</p>
                                                <p>Z =
                                                    <?php $k = 0; ?>
                                                    <?php foreach ($defuzzy as $d) : ?>
                                                        <?php if ($k == 0) : ?>
                                                            (<?= $d['z_score'] ?> * <?= $d['a_predikat'] ?>)
                                                            <?php $k++ ?>
                                                        <?php else : ?>
                                                            + (<?= $d['z_score'] ?> * <?= $d['a_predikat'] ?>)
                                                            <?php $k++ ?>
                                                        <?php endif ?>
                                                    <?php endforeach ?> / (<?php $l = 0; ?>
                                                    <?php foreach ($defuzzy as $d) : ?>
                                                        <?php if ($l == 0) : ?>
                                                            <?= $d['a_predikat'] ?>
                                                            <?php $l++ ?>
                                                        <?php else : ?>
                                                            + <?= $d['a_predikat'] ?>
                                                            <?php $l++ ?>
                                                        <?php endif ?>
                                                        <?php endforeach ?>)
                                                </p>
                                                <p>
                                                    Z = <?= $skor['hasil_hitung'] ?>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Defuzzifikasi -->
                            </div>
                            <!-- End Tabs -->
                        </div>
                        <!-- End Default Tabs -->
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>