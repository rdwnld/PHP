<?php

require_once("koneksi.php");

$buku_id = $_GET['id'];

$query = mysqli_query($koneksi, "select * from buku where buku_id='$buku_id'");
while ($data = mysqli_fetch_object($query)) {
?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Ubah Buku</title>
    </head>

    <body>
        <h1>Ubah Data Buku</h1>
        <hr>
        <form action="proses_ubah.php" method="post" enctype="multipart/form-data">
            <table>
                <input type="hidden" name="id" value="<?= $data->buku_id ?>"></td>
                <tr>
                    <td>Judul Buku</td>
                    <td>:</td>
                    <td><input type=" text" name="judul" value="<?= $data->judul_buku ?>">
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><textarea name="deskripsi" id="" cols="21" rows="10"><?= $data->deskripsi ?></textarea></td>
                </tr>
                <tr>
                    <td>Penulis</td>
                    <td>:</td>
                    <td><input type="text" name="penulis" value="<?= $data->penulis ?>"></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td>:</td>
                    <td><input type=" text" name="penerbit" value="<?= $data->penerbit ?>"></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td>:</td>
                    <td><input type="file" name="gambar"><br>
                        <img src="images/<?= $data->gambar ?>" width="80">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="tambah" value="Tambah">
                    </td>
                </tr>
            </table>
        </form>
    </body>

    </html>

<?php
}
?>