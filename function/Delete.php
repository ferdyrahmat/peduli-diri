<?php
session_start();

$id_catatan = $_GET['id'];
$nik = $_SESSION['nik'];

$file = "../database/catatan_perjalanan.txt";

$db = file($file, FILE_IGNORE_NEW_LINES);

foreach ($db as $value) {
    $pd = explode("|", $value);
    if ($id_catatan == $pd['0']) {
        if ($nik == $pd['1']) {
            $no = $pd['0'] - 1;
        } else {
            echo "<script>location.href='../catatan-perjalanan';</script>";
        }
    }
}

$buka_file = file($file);
unset($buka_file[$no]);

file_put_contents($file, implode("", $buka_file));

$response = [
    'status'     => 'success',
    'msg'        => 'Catatan perjalanan berhasil di hapus',
    'redirect'   => 'catatan-perjalanan',
];

echo json_encode($response);
