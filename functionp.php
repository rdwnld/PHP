<html>

<head>
    <title>function</title>
</head>

<body>

    <h1>Belajar membuat function PHP</h1>
    <hr>

    <?php

    function luassegitiga($a, $t)
    {
        $alas = $a;
        $tinggi = $t;
        $luas = 0.5 * $alas * $tinggi;
        return $luas;
    }

    echo luassegitiga(10, 20);

    ?>

</body>

</html>