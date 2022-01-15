<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string program studi teknik informatika
$pdf->Cell(190,7,'LAPORAN TRANSAKSI',0,1,'C');
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',12);
//mencetak string daftar identitas mahasiswa
$pdf->Cell(190,7,'PELAYANAN JASA CLEANING SERVICE',0,1,'C');
// digunakan untuk Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10); // setting jenis font yang akan digunakan
$pdf->Cell(20,6,'Pelanggan',1,0); //untuk cell nim
$pdf->Cell(50,6,'Paket Cleaning',1,0); //untuk cell mhs
$pdf->Cell(25,6,'Satuan Harga',1,0); //untuk cell jenis kelamin
$pdf->Cell(50,6,'Banyak',1,0); //untuk cell alamat
$pdf->Cell(30,6,'Tanggal',1,1); //untuk cell tanggal lahir
$pdf->SetFont('Arial','',10); // setting jenis font yang akan digunakan
include 'koneksi.php'; // digunakan untuk include file koneksi.php
// ambil semua data mahasiswa dari database akademik2
$mahasiswa = mysqli_query($con, "select * from transaksi");
while ($row = mysqli_fetch_array($mahasiswa)){
 $pdf->Cell(20,6,$row['pelanggan'],1,0); //untuk menampilkan kolom nim nya
 $pdf->Cell(50,6,$row['nama_paket'],1,0); //untuk menampilkan kolom nama
 $pdf->Cell(25,6,$row['satuan_harga'],1,0); //untuk menampilkan kolom jenis kelamin
 $pdf->Cell(50,6,$row['banyak'],1,0); //untuk menampilkan kolom alamat
 $pdf->Cell(30,6,$row['tanggal'],1,1); //untuk menampilkan kolom tanggal lahir
}
$pdf->Output(); //digunakan untuk menampilkan atau meng generate halaman PDF
?>