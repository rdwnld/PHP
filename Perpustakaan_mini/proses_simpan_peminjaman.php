<?php
require_once('koneksi.php');

$nis = $_POST['nis'];
header("location:peminjaman.php?nis=$nis");


if (isset($_POST['simpan'])) {
    // Pengambilan data
    $no_peminjaman = $_POST['aidi'] . '-' . date('Y-m-d');
    $siswa = $_POST['aidi'];
    $buku = $_POST['buku'];
    $tgl_pinjam = date('Y-m-d');
    $tgl_kembali = $_POST['tgl_kembali'];

    $query = mysqli_query($koneksi, "insert into peminjaman values ('$no_peminjaman','$buku','$siswa','$tgl_pinjam','$tgl_kembali')");

    if ($query) {
        header('location:peminjaman.php');
    }
}


if (isset($_POST['cari'])) {
    $query = mysqli_query($koneksi, "select * from siswa");
    if ($query) {
        header('location:peminjaman.php');
    }
}
