<?php
session_start();

$nik = $_POST['nik'];

// Cek NIK
$db = file("../database/config.txt", FILE_IGNORE_NEW_LINES);

foreach ($db as $data) {
    // Pecah data
    $pd = explode("|", $data);
    // Jika NIk ada di dalam file config, maka beritahu kalau sudah terdaftar
    if ($nik == $pd['0']) {
        // Beritahu jika kondisi cek dapat berjalan = true
        $cek = true;
        // Buat variable nama dan beri isi data nama user sesuai dengan nik
        $nama = $pd['1'];
    }
}

// Jika NIk ditemukan
if ($cek) {
    $response = [
        'status'    => 'success',
        'nama'      => $nama
    ];

    echo json_encode($response);
    // Jika NIK tidak ditemukan
} else {
    $response = [
        'status'   => 'failed',
    ];

    echo json_encode($response);
}
