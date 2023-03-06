<?php

require_once("koneksi.php");



if (isset($_POST['tambah'])) {

    $jb = $_POST['judul'];
    $desk = $_POST['deskripsi'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    $namafile = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];

    if ($ukuran > 0 || $error == 0) {
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/' . $namafile);
        if ($move) {
            echo "File '$namafile' dengan ukuran $ukuran sudah terupload";
        } else {
            echo "Terjadi kesalahan mengupload";
        }
    } else {
        echo "File Gagal Diupload" . $error;
    }

    $query = mysqli_query($koneksi, "insert into buku values(null,'$jb','$desk','$penulis','$penerbit','$namafile' )");

    if ($query) {
        header('location:list_buku.php');
        // echo "berhasil";
    } else {
        echo "Gagal menyimpan ke database";
    }
}
