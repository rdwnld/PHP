<html>

<head>
    <title>Perpustakaan Mini</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <center>
        <h1>Daftar List User</h1>

        <div class='tambah'>
            <a href='tambah_user.php'>Tambah</a>
        </div>

        <table border="1" cellpadding="8">

            <tr>
                <th>NO</th>
                <th>Username</th>
                <!-- <th>Password</th> -->
                <th>Level</th>
                <th>Aksi</th>
            </tr>

            <?php
            require_once("koneksi.php");

            $query = mysqli_query($koneksi, "select * from users");
            // print_r($data);

            $no = 1;
            while ($data = mysqli_fetch_object($query)) {
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data->username ?></td>
                    <td><?= $data->level ?></td>
                    <td>
                        <div class='ubah'>
                            <a href="ubah_user.php?id=<?= $data->user_id ?>">Ubah</a>
                        </div>
                        <div class='hapus'>
                            <a href="hapus_user.php?id=<?= $data->user_id ?>" onclick="return confirm(' Yakin data ingin dihapus?')">Hapus</a>
                        </div>
                    </td>
                </tr>
            <?php
                $no++;
            };

            ?>
        </table>
        <div class="menu    ">
            <a href="index.php">Menu</a>
        </div>
    </center>
</body>

</html>