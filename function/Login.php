<?php
// Memulai Sesi dengan User
session_start();

// Buat delay selama 3 detik
sleep('3');

$nik = $_POST['nik'];
$nama = $_POST['nama'];

// Buat format data user yang tersimpan dalam file config.txt
$data = $nik . "|" . $nama;
// Buka file config.txt
$db = file("../database/config.txt", FILE_IGNORE_NEW_LINES);

// Mencari data user di file config.txt dengan array berdasarkan format data user yang telah kita buat
if (in_array($data, $db)) {
    // Jika data ditemukan, maka buat session atau sesi untuk user
    $_SESSION['nik']        = $nik;
    $_SESSION['nama']       = $nama;
    $_SESSION['IsLogged']   = true;

    $response = [
        'status'    => 'success',
        'msg'       => 'Login Berhasil!'
    ];

    echo json_encode($response);
} else {
    // Jika data tidak ditemukan, maka alihkan user kembali ke halaman login
    $response = [
        'status'    => 'failed',
        'msg'       => 'Login Gagal!'
    ];

    echo json_encode($response);
}
