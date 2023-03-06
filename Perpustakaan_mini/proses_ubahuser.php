<?php

require_once("koneksi.php");



if (isset($_POST['tambah'])) {

    $user_id = $_POST['id'];
    $uname = $_POST['username'];
    $pw = $_POST['password'];
    $lvl = $_POST['level'];

    $query = mysqli_query($koneksi, "
    update users set
    username='$uname',
    password='$pw',
    level='$lvl'
    where user_id='$user_id'");

    if ($query) {
        header('location:list_user.php');
        // echo "berhasil";
    } else {
        echo "Gagal menyimpan ke database";
    }
}
