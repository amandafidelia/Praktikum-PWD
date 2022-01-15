<?php

	$id = $_GET['id'];

	$sql = $koneksi->query("select * from paket_cleaning where id='$id'");

	$tampil = $sql->fetch_assoc();
?>

<div class="panel panel-default">
<div class="panel-heading">
		Ubah Data
 </div> 
<div class="panel-body">
  <div class="row">
    <div class="col-md-12">
                                    
      <form method="POST" >
        <div class="form-group">
          <label>Nama Paket</label>
            <input class="form-control" name="paket_cleaning" id="paket_cleaning" value="<?php echo $tampil['paket_cleaning']?>"/>
                    
        </div>
        <div class="form-group">
          <label>Harga</label>
            <input class="form-control" name="harga" id="harga" value="<?php echo $tampil['harga']?>"/>
                    
        </div>
        <div class="form-group">
          <label>Satuan Bayar</label>
            <select class="form-control" name="satuan_harga">
              <option>== Pilih ==</option>
                <?php 
                  $query = $koneksi->query("SELECT * FROM satuan_harga");
                    
                  while ($satuan_harga=$query->fetch_assoc()) {
                    echo "<option value='$satuan_harga[nama_satuan]'>$satuan_harga[nama_satuan]</option>";
                  }
                ?>
                
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

 	$paket_cleaning = $_POST ['paket_cleaning'];
  $harga = $_POST ['harga'];
  $satuan_harga = $_POST ['satuan_harga'];
    
  $simpan = $_POST ['simpan'];


 	if ($simpan) {
 		
 		$sql = $koneksi->query("update paket_cleaning set paket_cleaning='$paket_cleaning', harga='$harga', satuan_harga='$satuan_harga' where id='$id' ");

 		if ($sql) {
 			?>
 				<script type="text/javascript">
 					
 					alert ("Update Data Berhasil Disimpan");
 					window.location.href="?page=celaning";

 				</script>
 			<?php
 		}
 	}

 ?>
                             
                             

