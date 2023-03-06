<?php

require_once("koneksi.php");



if (isset($_POST['tambah'])) {

    $uname = $_POST['username'];
    $pw = md5($_POST['password']);
    $lvl = $_POST['level'];

    $query = mysqli_query($koneksi, "insert into users values(null,'$uname','$pw','$lvl')");

    if ($query) {
        header('location:list_user.php');
        // echo "berhasil";
    } else {
        echo "Gagal menyimpan ke database";
    }
}
