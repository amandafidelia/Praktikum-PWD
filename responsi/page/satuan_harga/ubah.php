<?php

	$id = $_GET['id'];

	$sql = $koneksi->query("select * from satuan_harga where id='$id'");

	$tampil = $sql->fetch_assoc();
?>

<div class="panel panel-default">
<div class="panel-heading">
		Ubah Data Satuan
 </div> 
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form method="POST" >
                                        <div class="form-group">
                                          <label>Satuan Harga</label>
                                          <input class="form-control" name="nama_satuan" id="nama_satuan" value="<?php echo $tampil['nama_satuan']?>"/>
                    
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

 	$nama_satuan = $_POST ['nama_satuan'];

  $simpan = $_POST ['simpan'];


 	if ($simpan) {
 		
 		$sql = $koneksi->query("update satuan_harga set nama_satuan='$nama_satuan' where id='$id' ");

 		if ($sql) {
 			?>
 				<script type="text/javascript">
 					
 					alert ("Update Data Berhasil Disimpan");
 					window.location.href="?page=satuan_harga";

 				</script>
 			<?php
 		}
 	}

 ?>
                             
                             

