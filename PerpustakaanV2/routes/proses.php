<?php
include '../controllers/db.php';

// PROSES LOGIN
if (@$_POST['login']) {

    $uname = $_POST['username'];
    $pw = $_POST['password'];


    if ($uname == null || $pw == null) {
        session_start();
        $_SESSION['warning'] = "Data Kosong";
        header("location:../login.php");
    } else {

        $perpus->proses_login($uname, $pw);
    }
}
// PROSES LOGIN END


// PROSES LOGOUT
if (@$_GET['aksi'] == 'logout') {
    $perpus->logout();
}
// PROSES LOGOUT END




// PROSES USER

// PROSES SIMPAN USER
if (@$_POST['simpan_user']) {
    $uname = $_POST['username'];
    $pw = $_POST['password'];

    $perpus->simpan_user($uname, $pw);
}
// PROSES SIMPAN USER END

// PROSES UBAH USER
if (@$_POST['ubah_user']) {
    $id = $_POST['id'];
    $uname = $_POST['username'];
    $pw = $_POST['password'];

    $perpus->ubah_user($uname, $pw, $id);
}
// PROSES UBAH USER END

// PROSES HAPUS USER
if (@$_GET['act'] == 'hapus_user') {
    $id = $_GET['id'];

    $perpus->hapus_user($id);
}
// PROSES HAPUS USER END

// PROSES USER END



// PROSES SISWA

// PROSES SIMPAN USER
if (@$_POST['simpan_siswa']) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $foto = $_FILES['foto']['name'];

    $perpus->simpan_siswa($nisn, $nama, $kelas, $foto);
}
// PROSES SIMPAN USER END

// PROSES UBAH USER
if (@$_POST['ubah_siswa']) {
    $id = $_POST['id'];

    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $foto = $_FILES['foto']['name'];

    $perpus->ubah_siswa($nisn, $nama, $kelas, $foto, $id);
}
// PROSES UBAH USER END

// PROSES HAPUS USER
if (@$_GET['act'] == 'hapus_siswa') {
    $id = $_GET['id'];

    $perpus->hapus_siswa($id);
}
// PROSES HAPUS USER END
// PROSES SISWA END
