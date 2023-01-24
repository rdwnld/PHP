<?php
$n1 = ($_POST['n1']);
$n2 = ($_POST['n2']);
$rumus = ($_POST['rumus']);

if ($n1 == '' || $n2 == '') {
    echo "Nilai belum diisi";
} else {

    if ($rumus == 'ls') {

        function luassegitiga($n1, $n2)
        {
            $alas = $n1;
            $tinggi = $n2;
            $luas = 0.5 * $alas * $tinggi;

            return $luas;
        }
        echo "Nilai Luas Segitiga adalah " . luassegitiga($n1, $n2);
    }

    if ($rumus == 'lpp') {

        function luaspersegipanjang($n1, $n2)
        {
            $panjang = $n1;
            $lebar = $n2;
            $luas = $panjang * $lebar;
            return $luas;
        }
        echo "Nilai Luas Persegi Panjang adalah " . luaspersegipanjang($n1, $n2);
    }
}
