<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from karyawan where id='$id'");
    $data = $sql->fetch_assoc();

?>

<div class="panel panel-default">
<div class="panel-heading">
		Ubah Data Karyawan
 </div> 
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form method="POST" enctype="multipart/form-data" onsubmit="return validasi(this)" >
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input class="form-control" name="nik" id="nik" value="<?php echo $data['nik'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" id="nama" value="<?php echo $data['nama'];?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" id="alamat" value="<?php echo $data['alamat'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control" name="telp"  id="telp" value="<?php echo $data['telp'];?>"/>
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
                                            <label>Foto</label>
                                            <label><img src='images/<?php echo $data['foto'];?>' width="100" height="75"></label>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Ganti Foto</label>
                                            <input type="file" name="foto" id="foto" />
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

 	$nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $gender = $_POST['gender'];
    $bagian = $_POST['bagian'];
 	
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
        if (!empty($lokasi)) {
           
        $upload = move_uploaded_file($lokasi, "images/".$foto);
 		
 		$sql = $koneksi->query("update  karyawan set nik='$nik', nama='$nama', alamat='$alamat', telp='$telp', gender='$gender', bagian='$bagian', foto='$foto' where id='$id'");

 		
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Diubah");
 					window.location.href="?page=karyawan";

 				</script>
 			<?php
 		
 	}else{
        $sql = $koneksi->query("update  karyawan set nik='$nik', nama='$nama', alamat='$alamat', telp='$telp', gender='$gender', bagian='$bagian', foto='$foto' where id='$id'");

        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=karyawan";

                </script>
            <?php
    }

     }

 ?>
                             
                             

