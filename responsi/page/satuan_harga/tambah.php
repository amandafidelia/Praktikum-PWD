<script type="text/javascript" >
    function validasi(form){
        if (form.nama_satuan.value=="") {
            alert("Nama Satuan Tidak Boleh Kosong");
            form.nama_satuan.focus();
            return (false);
        }

        return(true);
    }
</script>

<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data Satuan Harga
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
            <form method="POST" onsubmit="return validasi(this)" >
                <div class="form-group">
                    <label>Satuan Harga</label>
                    <input class="form-control" name="nama_satuan" id="nama_satuan" />
                    
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

    $nama_satuan = $_POST ['nama_satuan'];

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        
        $sql = $koneksi->query("insert into satuan_harga (nama_satuan)values('$nama_satuan')");

        if ($sql) {
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=satuan_harga";

                </script>
            <?php
        }
    }

 ?>
                             
                             

