<script type="text/javascript">
    function validasi(form) {
        if (form.nik.value == "") {
            alert("NIK Tidak Boleh Kosong");
            form.nik.focus();
            return (false);
        }
        if (form.nama.value == "") {
            alert("Nama Tidak Boleh Kosong");
            form.nama.focus();
            return (false);

        }
        if (form.alamat.value == "") {
            alert("Alamat Tidak Boleh Kosong");
            form.alamat.focus();
            return (false);
        }
        if (form.telp.value == "") {
            alert("Telepon Tidak Boleh Kosong");
            form.telp.focus();
            return (false);
        }
        if (form.gender.value == "") {
            alert("Gender Tidak Boleh Kosong");
            form.gender.focus();
            return (false);
        }
        if (form.bagian.value == "") {
            alert("Bagian Tidak Boleh Kosong");
            form.bagian.focus();
            return (false);
        }
        if (form.foto.value == "") {
            alert("Foto Tidak Boleh Kosong");
            form.foto.focus();
            return (false);
        }

        return (true);
    }
</script>

<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data Karyawan
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data" onsubmit="return validasi(this)">
                    <div class="form-group">
                        <label>NIK</label>
                        <input class="form-control" name="nik" id="nik" />

                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" id="nama" />

                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" name="alamat" id="alamat" />

                    </div>

                    <div class="form-group">
                        <label>Telepon</label>
                        <input class="form-control" name="telp" id="telp" />

                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option> == Pilih Gender == </option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Bagian</label>
                            <select class="form-control" name="bagian">
                                <option>== Pilih ==</option>
                                <?php 
                                    $query = $koneksi->query("SELECT * FROM paket_cleaning");
                    
                                    while ($bagian=$query->fetch_assoc()) {
                                        echo "<option value='$bagian[paket_cleaning]'>$bagian[paket_cleaning]</option>";
                                }
                                ?>
                
                            </select>

                    </div>

                    <div class="form-group">
                        <label>File input</label>
                        <input type="file" name="foto" id="foto" />
                    </div>

                    <div>

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>
            </div>

            </form>
        </div>
    </div>
</div>
</div>


<?php

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$gender = $_POST['gender'];
$bagian = $_POST['bagian'];

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$upload = move_uploaded_file($lokasi, "images/" . $foto);

$simpan = $_POST['simpan'];


if ($simpan) {
    if ($upload) {



        $sql = $koneksi->query("insert into karyawan (nik, nama, alamat, telp, gender, bagian, foto)values('$nik', '$nama', '$alamat', '$telp', '$gender', '$bagian', '$foto')");


?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=karyawan";
        </script>
<?php

    }
}

?>