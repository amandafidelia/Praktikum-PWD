<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Pelanggan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div>
                            <a href="?page=pelanggan&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
                            </div><br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Jenis Kelamin</th>
                                            <th width="19%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from pelanggan");

                                            while ($data= $sql->fetch_assoc()) {
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['alamat'];?></td>
                                            <td><?php echo $data['no_telp'];?></td>
                                            <td><?php echo $data['jk'];?></td>
                                            <td>
                                                <a href="?page=pelanggan&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda ingin menghapus?')" href="?page=pelanggan&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

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