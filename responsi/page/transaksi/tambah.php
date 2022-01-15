<script type="text/javascript">
    function validasi(form){
        if (form.pelanggan.value=="") {
            alert("Pelanggan Tidak Boleh Kosong");
            form.pelanggan.focus();
            return(false);
        }if (form.nama_paket.value=="") {
            alert("Nama Paket Tidak Boleh Kosng");
            form.nama_paket.focus();
            return(false);
        }if (form.satuan_harga.value=="") {
            alert("Satuan Harga Tidak Boleh Kosong");
            form.satuan_harga.focus();
            return(false);
        }if (form.banyak.value=="") {
            alert("Banyak Tidak Boleh Kosong");
            form.banyak.focus();
            return(false);
        }if (form.tanggal.value=="") {
            alert("Tanggal Tidak Boleh Kosong");
            form.tanggal.focus();
            return(false);
        }
        return(true);
}
</script>

<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data Transaksi
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
            <form method="POST" onsubmit="return validasi(this)">
                <div class="form-group">
                    <label>Pelanggan</label>
                    <select class="form-control" name="pelanggan">
                     	<option>== Pilih ==</option>
                        <?php 
                            $query = $koneksi->query("SELECT * FROM pelanggan");
                    
                            while ($pelanggan=$query->fetch_assoc()) {
                                echo "<option value='$pelanggan[nama]'>$pelanggan[nama]</option>";
                            }
                        ?>
                
                    </select>
                    
                </div>

                <div class="form-group">
                    <label>Paket Cleaning</label>
                    <select class="form-control" name="nama_paket">
                        <option>== Pilih ==</option>
                        <?php 
                            $query = $koneksi->query("SELECT * FROM paket_cleaning");
                    
                            while ($nama_paket=$query->fetch_assoc()) {
                                echo "<option value='$nama_paket[paket_cleaning]'>$nama_paket[paket_cleaning] | $nama_paket[satuan_harga]</option>";
                            }
                        ?>
                
                    </select>
                    
                </div>

                <div class="form-group">
                    <label>Satuan Harga</label>
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

                <div class="form-group">
                    <label>Banyak</label>
                    <input class="form-control" name="banyak" id="banyak" />
                    
                </div>

                <div class="form-group">
                    <label>Tanggal Transaksi</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" />
                    
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

 	$pelanggan = $_POST ['pelanggan'];
 	$nama_paket = $_POST ['nama_paket'];
 	$satuan_harga = $_POST ['satuan_harga'];
 	$banyak = $_POST ['banyak'];
 	$tanggal= $_POST ['tanggal'];
 	
 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		
 		$sql = $koneksi->query("insert into transaksi (pelanggan, nama_paket, satuan_harga, banyak, tanggal)values('$pelanggan', '$nama_paket', '$satuan_harga','$banyak', '$tanggal')");

 		if ($sql) {
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=transaksi";

 				</script>
 			<?php
 		}
 	}

 ?>
                             
                             

