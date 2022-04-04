<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12 mb-4 mb-xl-0">
            <?php
            date_default_timezone_set('Asia/Jakarta');
            $jam = date('H:i');

            if ($jam > 00.00 && $jam < 11.01) {
                $salam = "Selamat Pagi!";
            } else if ($jam > 11.00 && $jam < 14.01) {
                $salam = "Selamat Siang!";
            } else if ($jam > 14.00 && $jam < 18.01) {
                $salam = "Selamat Sore!";
            } else {
                $salam = "Selamat Malam!";
            }
            ?>
            <h4 class="font-weight-bold text-dark"><?= $salam; ?></h4>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="alert alert-info">
                <i class="fa fa-bullhorn"></i>
                Selamat datang, <b><?= $_SESSION['nama']; ?></b> di Aplikasi PeduliDiri!
            </div>
        </div>
    </div>
    <div class="row" id="loadDataHome">
        <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
            <div class="row flex-grow">
                <div class="col-sm-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Total Perjalanan Anda</h4>
                            <h4 class="text-dark font-weight-bold mb-2">0</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Perjalanan Hari Ini</h4>
                            <h4 class="text-dark font-weight-bold mb-2">0</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 d-flex grid-margin stretch-card">
            <div class="card">
                <div class="card-body" style="border-radius: 10px;">

                </div>
            </div>
        </div>
    </div>
</div>