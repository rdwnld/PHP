<html>

<head>
    <title>AZCom</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <?php include("header.php"); ?>
        </div>
        <div class="menu">
            <?php include("menu.php"); ?>
        </div>
        <div class="content">
            <form action="" method="post">
                Pilih catalog :
                <select name="catalog" id="">
                    <option value="" aria-placeholder="PILIH"></option>
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                </select>
                <input type="submit" value="TAMPILKAN" name="tombol">
                <hr>
                <table border="1" cellpadding="3" cellspasing="0" width="300">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Jenis</th>
                    </tr>

                    <?php

                    $hardware = ['Monitor', 'CPU', 'Keyboard', 'Mouse'];
                    $software = ['Windows OS', 'Linux OS', 'Mac OS'];

                    if (isset($_POST['tombol'])) {

                        $catalog = ($_POST['catalog']);
                        if ($catalog == '') {
                            echo "Data catalog tidak di temukan";
                        }

                        if ($catalog == 'hardware') {
                            $no = 1;
                            foreach ($hardware as $h) {

                                echo "<tr>
                                <td>$no</td>
                                <td>$h</td>
                                <td>Hardware</td>
                                </tr>";
                                $no++;
                            }
                        }

                        if ($catalog == 'software') {
                            $no = 1;
                            foreach ($software as $s) {

                                echo
                                "<tr>
                                <td>$no</td>
                                <td>$s</td>
                                <td>Software</td>
                                </tr>";
                                $no++;
                            }
                        }
                    }
                    ?>
                </table>
            </form>
        </div>
        <div class="footer">
            <?php include("footer.php") ?>
        </div>
    </div>
</body>

</html>