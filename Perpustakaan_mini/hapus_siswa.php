<?php

require_once("koneksi.php");

$id_siswa = $_GET['id'];

$query = mysqli_query($koneksi, "delete from siswa where id_siswa='$id_siswa'");


if ($query) {
    header('location:list_siswa.php');
    // echo "berhasil";
} else {
    echo "Gagal terhapus";
}
