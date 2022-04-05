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
}

$data = $id . "|" . $nik . "|" . $tanggal . "|" . $jam . "|" . $lokasi . "|" . $suhu . "\n";

fwrite($fh, $data);
fclose($fh);

$response = [
    'status'    => 'success',
    'msg'       => 'Catatan berhasil ditambahkan!',
    'redirect'  => 'catatan-perjalanan'
];

echo json_encode($response);
