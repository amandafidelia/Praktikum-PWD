<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Paket Cleaning
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div>
                            <a href="?page=cleaning&aksi=tambah" class="btn btn-success" style="margin-top:  8px;"><i class="fa fa-plus"></i> Tambah Data</a>
                            <a href="cleaning_xml.php" class="btn btn-success" style="margin-top:  8px;"><i class="fa fa-plus"></i> Data XML</a>
                            <a href="cleaning_json.php" class="btn btn-success" style="margin-top:  8px;"><i class="fa fa-plus"></i> Data JSON</a>
                            <a href="getdatacleaning.php" class="btn btn-success" style="margin-top:  8px;"><i class="fa fa-plus"></i> Get Data Cleaning</a>
                            <a href="akses_cleaning.php" class="btn btn-success" style="margin-top:  8px;"><i class="fa fa-plus"></i> Akses Data Cleaning</a>
                            </div><br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Nama Paket</th>
                                            <th>harga</th>
                                            <th>Satuan Bayar</th>
                                            <th width="19%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        $no = 1;

                                        $sql = $koneksi->query("select * from paket_cleaning");

                                        while ($data= $sql->fetch_assoc()) {

                                    ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['paket_cleaning'];?></td>
                                        <td><?php echo $data['harga'];?></td>
                                        <td><?php echo $data['satuan_harga'];?></td>
                                        <td>
                                            <a href="?page=cleaning&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=cleaning&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

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

     