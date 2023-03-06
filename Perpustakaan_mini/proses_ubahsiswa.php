<?php

require_once("koneksi.php");



if (isset($_POST['tambah'])) {

    $id_siswa = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kls = $_POST['kelas'];

    $query = mysqli_query($koneksi, "
    update siswa set
    nis='$nis',
    nama='$nama',
    kelas='$kls'
    where id_siswa='$id_siswa'");

    if ($query) {
        header('location:list_siswa.php');
        // echo "berhasil";
    } else {
        echo "Gagal menyimpan ke database";
    }
}
