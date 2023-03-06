<?php
session_start();


if ($_SESSION['login'] == null) {
    header('location:login.php?err=illegal');
} else {
?>

    <html>

    <head>
        <title>Perpustakaan Mini</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <center>
            <h1>Daftar List Buku</h1>

            <div class='tambah'>
                <a href='tambah_buku.php'>Tambah</a>
            </div>

            <table border="1" cellpadding="8">

                <tr>
                    <th>NO</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Cover</th>
                    <th>Aksi</th>
                </tr>

                <?php
                require_once("koneksi.php");

                $query = mysqli_query($koneksi, "select * from buku");
                // print_r($data);

                $no = 1;
                while ($data = mysqli_fetch_object($query)) {
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data->judul_buku ?></td>
                        <td><?= $data->penulis ?></td>
                        <td><?= $data->penerbit ?></td>
                        <td><?= "<img src='images/$data->gambar' width='100'>" ?></td>
                        <td>
                            <div class='ubah'>
                                <a href="ubah_buku.php?id=<?= $data->buku_id ?>">Ubah</a>
                            </div>
                            <div class='hapus'>
                                <a href="hapus_buku.php?id=<?= $data->buku_id ?>" onclick="return confirm(' Yakin data ingin dihapus?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php
                    $no++;
                };

                ?>
            </table>
            <div class='menu'>
                <a href='index.php'>Menu</a>
            </div>
        </center>
    </body>

    </html>

<?php
}
?>