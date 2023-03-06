<?php

class perpustakaan
{

    var $koneksi;


    public function __construct()
    {
        $this->koneksi = new mysqli("localhost", "root", "", "perpustakaan_v2");

        if (mysqli_connect_errno()) {
            echo "Koneksi Gagal" . mysqli_connect_error();
        }
    }


    public function proses_login($uname, $pw)
    {

        $query = $this->koneksi->query("SELECT * FROM users WHERE username='$uname' AND password=md5('$pw')");
        $data = $query->fetch_object();
        $count = $query->num_rows;

        if ($count > 0) {
            session_start();
            $_SESSION['login'] = 1;
            $_SESSION['username'] = $data->username;
            $_SESSION['level'] = $data->level;
            $_SESSION['nis'] = $data->nis;

            header("location:../dashboard.php");
        } else {
            session_start();
            $_SESSION['warning'] = "Anda Gagal Login, Periksa lagi";
            header("location:../login.php");
        }
    }


    public function logout()
    {
        session_start();
        session_destroy();

        // ALERT
        session_start();
        $_SESSION['success'] = "Anda Berhasil Logout";

        header("location:../login.php");
    }

    // DATA USERS
    public function list_users()
    {

        $query = $this->koneksi->query("SELECT * FROM users");
        while ($data = $query->fetch_object()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function simpan_user($uname, $pw)
    {
        if ($uname == '' || $pw == '') {
            session_start();
            $_SESSION['warning'] = "Username atau Password belum diisi, isi terlebih dahulu";
            header('location:../dashboard.php?pages=users&act=tambah');
        } else {
            $this->koneksi->query("INSERT INTO users VALUES(null,'$uname',md5('$pw'),'Petugas',0)");
            session_start();
            $_SESSION['success'] = "User berhasil di tambah";
            header('location:../dashboard.php?pages=users');
        }
    }

    public function ubah_user($uname, $pw, $id)
    {
        if ($pw == '') {
            $query = $this->koneksi->query("UPDATE users SET username='$uname' WHERE user_id=$id");
        } else {
            $query = $this->koneksi->query("UPDATE users SET username='$uname', password=md5('$pw') WHERE user_id=$id");
        }
        if ($query) {
            session_start();
            $_SESSION['success'] = "User berhasil di ubah";
            header('location:../dashboard.php?pages=users');
        }
    }

    public function tampil_ubah($id)
    {
        $query = $this->koneksi->query("SELECT * FROM users where user_id=$id");
        $data = $query->fetch_object();
        return $data;
    }

    public function hapus_user($id)
    {
        $query = $this->koneksi->query("DELETE FROM users where user_id=$id");

        if ($query) {
            session_start();
            $_SESSION['success'] = "User berhasil di hapus";
            header('location:../dashboard.php?pages=users');
        }
    }
    public function jumlah_user()
    {
        $query = $this->koneksi->query("SELECT * FROM users");
        return $query->num_rows;
    }
    // DATA USERS END



    // DATA SISWA

    public function list_siswa()
    {

        $query = $this->koneksi->query("SELECT * FROM siswa");
        while ($data = $query->fetch_object()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function simpan_siswa($nisn, $nama, $kelas, $foto)
    {
        if ($nisn == '' || $nama == '' || $kelas == '' || $foto == '') {

            session_start();
            $_SESSION['warning'] = "Data belum diisi, isi terlebih dahulu";
            header('location:../dashboard.php?pages=siswa&act=tambah');
        } else {
            $ukuran = $_FILES['gambar']['size'];
            $error = $_FILES['gambar']['error'];

            if ($ukuran > 0 || $error == 0) {
                $move = move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/images/' . $foto);
                if ($move) {
                    echo "File '$foto' dengan ukuran $ukuran sudah terupload";
                } else {
                    echo "Terjadi kesalahan mengupload";
                }
            } else {
                echo "File Gagal Diupload" . $error;
            }
        }

        $query = $this->koneksi->query("INSERT INTO siswa VALUES(null,'$nisn','$nama','$kelas','$foto')");

        if ($query) {
            session_start();
            $_SESSION['success'] = "Siswa berhasil di tambah";
            header('location:../dashboard.php?pages=siswa');
        }
    }
    public function ubah_siswa($nisn, $nama, $kelas, $foto, $id)
    {
        if ($nisn == '' || $nama == '' || $kelas == '' || $foto == '') {
            $query = $this->koneksi->query("UPDATE siswa SET nisn='$nisn',nama='$nama',kelas='$kelas',foto='$foto' WHERE siswa_id=$id");
        } else {
            $query = $this->koneksi->query("UPDATE siswa SET nisn='$nisn',nama='$nama',kelas='$kelas',foto='$foto' WHERE siswa_id=$id");
        }
        if ($query) {
            session_start();
            $_SESSION['success'] = "User berhasil di ubah";
            header('location:../dashboard.php?pages=siswa');
        }
    }

    public function tampil_ubah_siswa($id)
    {
        $query = $this->koneksi->query("SELECT * FROM siswa where siswa_id=$id");
        $data = $query->fetch_object();
        return $data;
    }

    public function hapus_siswa($id)
    {
        $query = $this->koneksi->query("DELETE FROM siswa where siswa_id=$id");

        if ($query) {
            session_start();
            $_SESSION['success'] = "User berhasil di hapus";
            header('location:../dashboard.php?pages=siswa');
        }
    }
    public function jumlah_siswa()
    {
        $query = $this->koneksi->query("SELECT * FROM siswa");
        return $query->num_rows;
    }

    // DATA SISWA END




};



$perpus = new perpustakaan();
