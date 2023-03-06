<?php
session_start();

if ($_SESSION['login'] == null) {
    header('location:login.php?err=illegal');
} else {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perpustakaan Mini</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <center>
            <h1>PERPUSTAKAAN MINI</h1>
            <div class="menu">
                <a href="logout.php">Logout</a>
            </div>

            <hr>
            <h2>Selamat Datang <b><?= $_SESSION['nama']; ?></b></h2>
            <?php
            if ($_SESSION['level'] == 'Petugas') {

            ?>

                <div class='menu'>
                    <a href='list_buku.php'>Buku</a>
                </div>
                <div class='menu'>
                    <a href='list_user.php'>Users</a>
                </div>
                <div class='menu'>
                    <a href='list_siswa.php'>Siswa</a>
                </div>
                <div class='menu'>
                    <a href='peminjaman.php'>Peminjaman</a>
                </div>
            <?php
            }
            if ($_SESSION['level'] == 'Siswa') {
            ?>
                <div class='menu'>
                    <a href='data_peminjaman.php'>Data Peminjaman</a>
                </div>

            <?php
            }
            ?>

        </center>
    </body>
<?php
}
?>

    </html>