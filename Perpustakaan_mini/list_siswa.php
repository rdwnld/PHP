<html>

<head>
    <title>Perpustakaan Mini</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <center>
        <h1>Daftar List Siswa</h1>

        <div class='tambah'>
            <a href='tambah_siswa.php'>Tambah</a>
        </div>

        <table border="1" cellpadding="8">

            <tr>
                <th>NO</th>
                <th>NIS</th>
                <th>NAMA</th>
                <th>KELAS</th>
                <th>AKSI</th>
            </tr>

            <?php
            require_once("koneksi.php");

            $query = mysqli_query($koneksi, "select * from siswa");
            // print_r($data);

            $no = 1;
            while ($data = mysqli_fetch_object($query)) {
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data->nis ?></td>
                    <td><?= $data->nama ?></td>
                    <td><?= $data->kelas ?></td>
                    <td>
                        <div class='ubah'>
                            <a href="ubah_siswa.php?id=<?= $data->id_siswa ?>">Ubah</a>
                        </div>
                        <div class='hapus'>
                            <a href="hapus_siswa.php?id=<?= $data->id_siswa ?>" onclick="return confirm(' Yakin data ingin dihapus?')">Hapus</a>
                        </div>
                    </td>
                </tr>
            <?php
                $no++;
            };

            ?>
        </table>
        <div class="menu">
            <a href="index.php">Menu</a>
        </div>
    </center>
</body>

</html>