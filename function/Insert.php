<?php
session_start();

$nik = $_SESSION['nik'];

$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

$file = "../database/catatan_perjalanan.txt";

$fh = fopen($file, "a");
$db = file($file, FILE_IGNORE_NEW_LINES);

if (trim(file_get_contents($file)) == '') {
    $id = 1;
}

foreach ($db as $value) {
    $pd = explode("|", $value);

    $id = $pd['0'] + 1;

    if ($nik == $pd['1']) {
        if ($tanggal == $pd['2']) {
            if ($jam == $pd['3']) {
                if ($lokasi == $pd['4']) {
                    if ($suhu == $pd['5']) {
                        $validation = true;
                    }
                }
            }
        }
    }
}

if (isset($validation)) {
    $response = [
        'status'    => 'failed',
        'msg'       => 'Tidak dapat menyimpan catatan, Catatan ini sudah ada didatabase!'
    ];

    echo json_encode($response);
} else {
    $data = $id . "|" . $nik . "|" . $tanggal . "|" . $jam . "|" . $lokasi . "|" . $suhu . "\n";

    fwrite($fh, $data);
    fclose($fh);

    $response = [
        'status'    => 'success',
        'msg'       => 'Catatan berhasil ditambahkan!',
        'redirect'  => 'catatan-perjalanan'
    ];

    echo json_encode($response);
}
