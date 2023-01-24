
<?php

if ($tambah) {
    function tambah($n1, $n2)
    {
        $n1 = $n1;
        $n2 = $n2;
        $luas = $n1 + $n2;
        return $luas;
    }
    echo tambah($n1, $n2);
}
if ($kurang) {
    function kurang($n1, $n2)
    {
        $n1 = $n1;
        $n2 = $n2;
        $luas = $n1 - $n2;
        return $luas;
    }
    echo kurang($n1, $n2);
}
if ($kali) {
    function kali($n1, $n2)
    {
        $n1 = $n1;
        $n2 = $n2;
        $luas = $n1 * $n2;
        return $luas;
    }
    echo kali($n1, $n2);
}
if ($bagi) {
    function bagi($n1, $n2)
    {
        $n1 = $n1;
        $n2 = $n2;
        $luas = $n1 / $n2;
        return $luas;
    }
    echo bagi($n1, $n2);
}
?>