<?php

require_once("koneksi.php");

$user_id = $_GET['id'];

$query = mysqli_query($koneksi, "select * from users where user_id='$user_id'");
while ($data = mysqli_fetch_object($query)) {
?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Ubah User</title>
    </head>

    <body>
        <h1>Ubah User</h1>
        <hr>
        <form action="proses_ubahuser.php" method="post">
            <table>
                <input type="hidden" name="id" value="<?= $data->user_id ?>"></td>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" value="<?= $data->username ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" value="<?= $data->password ?>"></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>:</td>
                    <td><input type="text" name="level" value="<?= $data->level ?>"></td>
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