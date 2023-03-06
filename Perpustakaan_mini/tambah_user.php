<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah User</title>
</head>

<body>
    <h1>Tambah User</h1>
    <hr>
    <form action="proses_tambahuser.php" method="post">
        <table>
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
            <tr>
                <td>Level</td>
                <td>:</td>
                <td><select name="level">
                        <option hidden>Plih Level</option>
                        <option value="Petugas">Petugas</option>
                    </select></td>
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