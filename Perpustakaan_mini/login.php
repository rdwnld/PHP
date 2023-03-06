<html>

<head>
    <title>LOGIN</title>
</head>

<body>
    <h1>
        Login
    </h1>
    <hr>
    <?php

    $pesan = $_GET['err'];
    if ($pesan == 'logout') {
        echo "Anda Berhasil Logout";
    }
    if ($pesan == 'gagal') {
        echo "Anda gagal login, periksa kembali";
    }
    if ($pesan == 'illegal') {
        echo "Gabole nyusup mas";
    }

    ?>
    <table>
        <form action="proseslogin.php" method="post">
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="login" value="Login">
            </td>
            </tr>
        </form>
    </table>
</body>

</html>