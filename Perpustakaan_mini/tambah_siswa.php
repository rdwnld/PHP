<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Siswa</title>
</head>

<body>
    <h1>Tambah Siswa</h1>
    <hr>
    <form action="proses_tambahsiswa.php" method="post">
        <table>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><select name="kelas">
                        <option hidden>Plih kelas</option>
                        <option value="X PPLG">X PPLG</option>
                        <option value="X TKJ">X TKJ</option>
                        <option value="XI PPLG">XI PPLG</option>
                        <option value="XI TKJ">XI TKJ</option>
                        <option value="XII PPLG">XII PPLG</option>
                        <option value="XII TKJ">XII TKJ</option>
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