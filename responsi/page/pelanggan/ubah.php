<?php
	

	$id = $_GET['id'];

	$sql = $koneksi->query("select * from pelanggan where id = '$id'");

	$tampil = $sql->fetch_assoc();


?>

<div class="panel panel-default">
<div class="panel-heading">
		Ubah Data Pelanggan
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" >
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>"/>
                    
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" name="alamat" value="<?php echo $tampil['alamat']?>"/>
                    
                </div>

                <div class="form-group">
                    <label>Telepon</label>
                    <input class="form-control" name="no_telp" value="<?php echo $tampil['no_telp']?>" />
                    
                </div>

                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jk">
                        <option> == Pilih Gender == </option>
                        <option value="Laki-Laki" <?php if ($jk=='Laki-Laki') {echo "selected";} ?>>Laki-Laki</option>
                        <option value="Perempuan" <?php if ($jk=='Perempuan') {echo "selected";} ?>>Perempuan</option>

                    </select>
                    
                </div>
                
                <div>
                	
                	<input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
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
 		
 		$sql = $koneksi->query("update  pelanggan set nama='$nama', alamat='$alamat', no_telp='$no_telp', jk='$jk' where id='$id' ");
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
                             
                             

