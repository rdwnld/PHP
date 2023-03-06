<?php

require_once("koneksi.php");

$id_siswa = $_GET['id'];

$query = mysqli_query($koneksi, "select * from siswa where id_siswa='$id_siswa'");
while ($data = mysqli_fetch_object($query)) {
?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Ubah Siswa</title>
    </head>

    <body>
        <h1>Ubah User</h1>
        <hr>
        <form action="proses_ubahsiswa.php" method="post">
            <table>
                <input type="hidden" name="id" value="<?= $data->id_siswa ?>"></td>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><input type="text" name="nis" value="<?= $data->nis ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $data->nama ?>"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><select name="kelas" value="<?= $data->kelas ?>">
                            <option hidden>Plih kelas</option>
                            <option value="X PPLG">X PPLG</option>
                            <option value="X TKJ">X TKJ</option>
                            <option value="XI PPLG">XI PPLG</option>
                            <option value="XI TKJ">XI TKJ</option>
                            <option value="XII PPLG">XII PPLG</option>
                            <option value="XII TKJ">XII TKJ</option>
                        </select>
                    </td>
                </tr>
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