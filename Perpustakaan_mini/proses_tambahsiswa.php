<?php

require_once("koneksi.php");



if (isset($_POST['tambah'])) {

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kls = $_POST['kelas'];

    $query = mysqli_query($koneksi, "insert into siswa values(null,'$nis','$nama','$kls')");

    if ($query) {
        $query = mysqli_query($koneksi, "insert into users values(null,'$nis',md5('$nis'),'Siswa','$nis')");
        header('location:list_siswa.php');
        // echo "berhasil";
    } else {
        echo "Gagal menyimpan ke database";
    }
}
