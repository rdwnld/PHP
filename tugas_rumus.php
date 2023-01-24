<html>

<head>
    <title>Rumus</title>
</head>

<body>
    <h1 style="text-align: center;">Aplikasi sederhana menghitung Rumus <br>Luas Segitiga & Persegi Panjang</h1>
    <hr>

    <form action="proses2.php" method="post">

        <table>
            <tr>
                <td><label for="">NILAI 1</label></td>
                <td>:</td>
                <td><input type="number" name="n1"></td>
            </tr>
            <tr>
                <td><label for="">NILAI 2</label></td>
                <td>:</td>
                <td><input type="number" name="n2"></td>
            </tr>
            <tr>
                <td>RUMUS</td>
                <td>:</td>
                <td><select name="rumus" id="">

                        <option value="" disabled>Pilih Rumus</option>
                        <option value="ls">Luas Segitiga</option>
                        <option value="lpp">Luas Persegi Panjang</option>

                    </select></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <input type="submit" value="HITUNG"></td>
            </tr>


        </table>
    </form>

</body>

</html>