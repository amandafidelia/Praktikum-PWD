<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Cetak Laporan Transaksi
    </div>
    <div class="panel-body">
        <div class="table-responsive">
        	<div>
                <a href="cetak.php" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Cetak Laporan</a>
            </div><br>
            
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pelanggan</th>
                        <th>Paket Cleaning</th>
                        <th>Satuan Harga</th>
                        <th>Banyak</th>
                        <th>Tanggal Transaksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from transaksi");

                        while ($data= $sql->fetch_assoc()) {

                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['pelanggan'];?></td>
                        <td><?php echo $data['nama_paket'];?></td>
                        <td><?php echo $data['satuan_harga'];?></td>
                        <td><?php echo $data['banyak'];?></td>
                        <td><?php echo $data['tanggal'];?></td>
                        
                    </tr>
                    <?php  } ?>
                </tbody>
                </table>
              </div>
    </div>
</div>
</div>
</div>                          