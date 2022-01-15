<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from transaksi where id='$id'");
    $tampil = $sql->fetch_assoc();

?>

<div class="panel panel-default">
<div class="panel-heading">
		Ubah Data Transaksi
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
                                    
            <form method="POST">
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
                    <input class="form-control" name="banyak" id="banyak" value="<?php echo $tampil['banyak']?>"/>
                    
                </div>

                <div class="form-group">
                    <label>Tanggal Transaksi</label>
                    <input class="form-control" name="tanggal" id="tanggal" value="<?php echo $tampil['tanggal']?>"/>
                    
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

 	$pelanggan = $_POST ['pelanggan'];
    $nama_paket = $_POST ['nama_paket'];
    $satuan_harga = $_POST ['satuan_harga'];
    $banyak = $_POST ['banyak'];
    $tanggal= $_POST ['tanggal'];
    
    $simpan = $_POST ['simpan'];


 	if ($simpan) {
        
        $sql = $koneksi->query("update  transaksi set pelanggan='$pelanggan', nama_paket='$nama_paket', satuan_harga='$satuan_harga', banyak='$banyak', tanggal='$tanggal' where id='$id' ");
        if ($sql) {
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=transaksi";

                </script>
            <?php
        }
    }

 ?>
                             
                             

