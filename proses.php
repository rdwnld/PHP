<?php

$nama = ($_POST['nama']);
$email = ($_POST['email']);
$pesan = ($_POST['pesan']);

if ($nama == '') {
    echo "Nama belum diisi<br>";
} else {
    echo "Nama : " . $nama . "<br>";
}


if ($email == '') {
    echo "Email belum diisi<br>";
} else {
    echo "Email : " . $email . "<br>";
}


if ($pesan == '') {
    echo "Email belum diisi<br>";
} else {
    echo "Email : " . $pesan . "<br>";
}
