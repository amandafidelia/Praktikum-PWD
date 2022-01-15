<script type="text/javascript">
    function validasi(form){
        if (form.nama.value=="") {
            alert("Nama Tidak Boleh Kosong");
            form.nama.focus();
            return(false);
        }if (form.alamat.value=="") {
            alert("Alamat Tidak Boleh Kosng");
            form.alamat.focus();
            return(false);
        }if (form.no_telp.value=="") {
            alert("Telepon Tidak Boleh Kosong");
            form.no_telp.focus();
            return(false);
        }if (form.jk.value=="") {
            alert("Jenis Kelamin Tidak Boleh Kosong");
            form.jk.focus();
            return(false);
        }
        return(true);
    }
</script>

<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data Pelanggan
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
            <form method="POST" onsubmit="return validasi(this)">
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
                    <input class="form-control" name="no_telp" id="no_telp" />
                    
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label><br/>
                        <select class="form-control" name="jk">
                            <option> == Pilih Jenis Kelamin == </option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>

                        </select> 
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

 	$nama = $_POST ['nama'];
 	$alamat = $_POST ['alamat'];
 	$no_telp = $_POST ['no_telp'];
 	$jk = $_POST ['jk'];
 	
 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		
 		$sql = $koneksi->query("insert into pelanggan (nama, alamat, no_telp, jk)values('$nama', '$alamat', '$no_telp','$jk')");

 		if ($sql) {
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=pelanggan";

 				</script>
 			<?php
 		}
 	}

 ?>
                             
                             

