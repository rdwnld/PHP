<html>

<head>
    <title>Kasus</title>
</head>

<body>


    <h1>Kalkulator sederhana</h1>
    <hr>
    <table>
        <form action="" method="post">

            <tr>
                <td><label for="">Nilai 1</label></td>
                <td>:</td>
                <td> <input type="number" name="n1"><br></td>
            </tr>
            <tr>
                <td><label for="">Nilai 2</label></td>
                <td>:</td>
                <td><input type="number" name="n2"><br></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <input type="submit" value="+" name="tombol">
                    <input type="submit" value="-" name="tombol">
                    <input type="submit" value="*" name="tombol">
                    <input type="submit" value="/" name="tombol">
                </td>
            </tr>
            <tr>
                <td><label for="">Hasil</label></td>
                <td>:</td>
                <td>
                    <?php

                    $n1 = ($_POST['n1']);
                    $n2 = ($_POST['n2']);
                    $tombol = ($_POST['tombol']);


                    if ($n1 == '' || $n2 == '') {
                        $hsl = 0;
                    } else {
                        if ($tombol == '+') {
                            function tambah($n1, $n2)
                            {
                                $n1 = $n1;
                                $n2 = $n2;
                                $hasil = $n1 + $n2;
                                return $hasil;
                            }

                            $hsl = tambah($n1, $n2);
                        }
                        if ($tombol == '-') {
                            function kurang($n1, $n2)
                            {
                                $n1 = $n1;
                                $n2 = $n2;
                                $hasil = $n1 - $n2;
                                return $hasil;
                            }
                            $hsl = kurang($n1, $n2);
                        }
                        if ($tombol == '*') {
                            function kali($n1, $n2)
                            {
                                $n1 = $n1;
                                $n2 = $n2;
                                $hasil = $n1 * $n2;
                                return $hasil;
                            }
                            $hsl = kali($n1, $n2);
                        }
                        if ($tombol == '/') {
                            function bagi($n1, $n2)
                            {
                                $n1 = $n1;
                                $n2 = $n2;
                                $hasil = $n1 / $n2;
                                return $hasil;
                            }
                            $hsl = bagi($n1, $n2);
                        }
                    }


                    ?>
                    <input type="number" name="hasil" id="" value="<?= $hsl; ?>" disabled>
                </td>
            </tr>
        </form>
    </table>







</body>

</html>