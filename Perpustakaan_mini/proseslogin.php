<?php
session_start();

require_once("koneksi.php");

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM  users WHERE username='$username' AND password='$password'");

    $data = mysqli_num_rows($query);
    $data_user = mysqli_fetch_object($query);

    // print_r($data);
    // echo '<br>';
    // print_r($data_user);

    if ($data > 0) {
        $_SESSION['login'] = 1;
        $_SESSION['nama'] = $data_user->username;
        $_SESSION['level'] = $data_user->level;
        $_SESSION['nis'] = $data_user->nis;
        header('location:index.php');
    } else {
        header('location:login.php?err=gagal');
    }
}
