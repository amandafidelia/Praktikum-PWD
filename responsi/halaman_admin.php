<?php
error_reporting(0);
session_start();

$koneksi = new mysqli("localhost", "root", "", "responsi_pwd");



?>

    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CLEANING SERVICE</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="halaman_admin.php">CLEANING SERVICE</a>
                </div>
                <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><?php echo date('d-M-Y'); ?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
            </nav>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">



                        <li>
                            <a href="halaman_admin.php"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop fa-2x"></i> Data Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="?page=cleaning"></i> Data Paket Cleaning</a></li>
                                <li><a href="?page=satuan_harga"></i> Data Satuan Harga</a></li>
                                <li><a href="?page=pelanggan"></i> Data Pelanggan</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="?page=karyawan"><i class="fa fa-user fa-2x"></i></i> Data Karyawan</a>
                        </li>
                        <li>
                            <a href="?page=transaksi"><i class="fa fa-edit fa-2x"></i></i> Data Transaksi</a>
                        </li>
                        <li>
                            <a href="?page=laporan_transaksi"><i class="fa fa-calendar fa-2x"></i></i> Laporan Transaksi</a>
                        </li>
                        
                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">

                            <?php

                            $page = $_GET['page'];
                            $aksi = $_GET['aksi'];


                            if ($page == "cleaning") {
                                if ($aksi == "") {
                                    include "page/cleaning/cleaning.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/cleaning/tambah.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/cleaning/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/cleaning/hapus.php";
                                } elseif ($aksi == "cetak") {
                                    include "page/cleaning/form_laporan_buku.php";
                                }
                            } elseif ($page == "satuan_harga") {
                                if ($aksi == "") {
                                    include "page/satuan_harga/satuan_harga.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/satuan_harga/tambah.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/satuan_harga/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/satuan_harga/hapus.php";
                                }
                            } elseif ($page == "pelanggan") {
                                if ($aksi == "") {
                                    include "page/pelanggan/pelanggan.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/pelanggan/tambah.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/pelanggan/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/pelanggan/hapus.php";
                                }
                            } elseif ($page == "karyawan") {
                                if ($aksi == "") {
                                    include "page/karyawan/karyawan.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/karyawan/tambah.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/karyawan/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/karyawan/hapus.php";
                                }
                            } elseif ($page == "transaksi") {
                                if ($aksi == "") {
                                    include "page/transaksi/transaksi.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/transaksi/tambah.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/transaksi/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/transaksi/hapus.php";
                                }
                            } elseif ($page == "laporan_transaksi") {
                                if ($aksi == "") {
                                    include "page/laporan_transaksi/laporan_transaksi.php";
                                } elseif ($aksi == "cetak") {
                                    include "page/laporan_transaksi/cetak.php";
                                }
                            } elseif ($page == "") {
                                include "utama.php";
                            }

                            ?>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />

                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->



        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').dataTable();
            });
        </script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>



    </body>

    </html>

<?php

?>