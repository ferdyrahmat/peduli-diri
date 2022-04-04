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

$count = count($db);
if ($count == 0) {
    $id = 1;
} else {
    $id = $count + 1;
}

$data = $id . "|" . $nik . "|" . $tanggal . "|" . $jam . "|" . $lokasi . "|" . $suhu . "\n";

fwrite($fh, $data);
fclose($fh);

echo "<script>alert('Catatan perjalanan berhasil disimpan!');
    location.href='catatan-perjalanan';
</script>";
