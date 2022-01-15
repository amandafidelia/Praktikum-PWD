<script type="text/javascript" >
    function validasi(form){
        if (form.paket_cleaning.value=="") {
            alert("Nama Paket Tidak Boleh Kosong");
            form.paket_cleaning.focus();
            return (false);
        }
        if (form.harga.value=="") {
            alert("Harga Paket Tidak Boleh Kosong");
            form.harga.focus();
            return (false);
        }
        if (form.satuan_harga.value=="") {
            alert("Satuan Harga Tidak Boleh Kosong");
            form.satuan_harga.focus();
            return (false);
        }

        return(true);
    }
</script>

<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data Paket Cleaning
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
            <form method="POST" onsubmit="return validasi(this)" >
                <div class="form-group">
                    <label>Nama Paket</label>
                    <input class="form-control" name="paket_cleaning" id="paket_cleaning" />
                    
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input class="form-control" name="harga" id="harga" />
                    
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
                    
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
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
        
        $sql = $koneksi->query("insert into paket_cleaning (paket_cleaning, harga, satuan_harga)values('$paket_cleaning', '$harga', '$satuan_harga')");

        if ($sql) {
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=cleaning";

                </script>
            <?php
        }
    }

 ?>
                             
                             

