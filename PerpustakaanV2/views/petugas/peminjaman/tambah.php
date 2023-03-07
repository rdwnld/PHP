<table class="table border shadow">
    <form action="routes/proses.php" method="post">
        <tr>
            <td>Siswa</td>
            <td>:</td>
            <td>
                <select name="siswa" type="text" class="form-select">
                    <?php
                    foreach ($perpus->cari_siswa() as $c) {
                    ?>
                        <option value="<?= $c->nama ?>"></option>
                    <?php
                    }
                    ?>
                </select>
            </td>

        </tr>
        <tr>
            <td>Buku</td>
            <td>:</td>
            <td>
                <select name="buku" class="form-select">
                    <?php
                    foreach ($perpus->cari_buku() as $c) {
                    ?>
                        <option value="<?= $c->buku_id ?>"><?= $c->judul_buku ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>

        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>
            <td><input type="date" name='tgl_kembali' class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="Simpan" class="btn btn-success"></td>
        </tr>
    </form>
</table>