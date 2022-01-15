<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Transaksi
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=transaksi&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
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
                        <th width="21%">Aksi</th>
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
                        
                        <td>
                            <a href="?page=transaksi&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=transaksi&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                        </td>
                    </tr>
                    <?php  } ?>
                </tbody>
                </table>
              </div>
    </div>
</div>
</div>
</div>                          