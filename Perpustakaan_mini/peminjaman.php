<?php
require_once('koneksi.php');
error_reporting(0);
?>
<html>

<head>
    <title>Peminjaman</title>
</head>

<body>
    <h1>Form Peminjaman</h1>
    <hr>
    <table>
        <form action="proses_simpan_peminjaman.php" method="post">
            <tr>
                <td>Cari</td>
                <td>:</td>
                <td><input type="text" name="nis"></td>
                <td><input type="submit" value="Cari"></td>
            </tr>
            <tr>
                <td>Siswa</td>
                <td>:</td>
                <?php

                $nis = $_GET['nis'];
                $query_siswa = mysqli_query($koneksi, "select * from siswa where nis='$nis'");
                $data_siswa = mysqli_fetch_array($query_siswa)

                ?>

                <td>
                    <input name="aidi" type="hidden" value="<?= $data_siswa['nis'] ?>">
                    <input name="siswa" type="text" value="<?= $data_siswa['nama'] ?>" disabled>
                </td>

            </tr>
            <tr>
                <td>Buku</td>
                <td>:</td>
                <td>
                    <select name="buku">
                        <?php

                        $query_buku = mysqli_query($koneksi, 'select * from buku');
                        while ($data_buku = mysqli_fetch_object($query_buku)) {


                        ?>
                            <option hidden>Pilih Buku</option>
                            <option value="<?= $data_buku->buku_id ?>"><?= $data_buku->judul_buku ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>

            </tr>
            <tr>
                <td>Tanggal Kembali</td>
                <td>:</td>
                <td><input type="date" name='tgl_kembali'></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
    </table>
    </form>

    <table border="1" cellspacing='0' cellpadding='5'>
        <tr>
            <td>No</td>
            <td>No Peminjaman</td>
            <td>Judul Buku</td>
            <td>Nama Siswa</td>
            <td>Tanggal Pinjam</td>
            <td>Tanggal Kembali</td>
        </tr>
        <?php
        $no = 1;
        $query_peminjaman = mysqli_query($koneksi, 'select * from peminjaman
        inner join buku on buku.buku_id = peminjaman.buku_id
        inner join siswa on siswa.nis = peminjaman.nis
        ');
        while ($data_peminjaman = mysqli_fetch_object($query_peminjaman)) {

        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data_peminjaman->no_peminjaman ?></td>
                <td><?= $data_peminjaman->judul_buku ?></td>
                <td><?= $data_peminjaman->nama ?></td>
                <td><?= $data_peminjaman->tgl_pinjam ?></td>
                <td><?= $data_peminjaman->tgl_kembali ?></td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </table>
</body>

</html>