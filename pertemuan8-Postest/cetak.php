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
$pdf->Cell(190,7,'PROGRAM STUDI TEKNIK INFORMATIKA',0,1,'C');
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',12);
//mencetak string daftar identitas mahasiswa
$pdf->Cell(190,7,'DAFTAR IDENTITAS MAHASISWA',0,1,'C');
// digunakan untuk Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10); // setting jenis font yang akan digunakan
$pdf->Cell(20,6,'NIM',1,0); //untuk cell nim
$pdf->Cell(50,6,'NAMA MAHASISWA',1,0); //untuk cell mhs
$pdf->Cell(25,6,'J KEL',1,0); //untuk cell jenis kelamin
$pdf->Cell(50,6,'ALAMAT',1,0); //untuk cell alamat
$pdf->Cell(30,6,'TANGGAL LAHIR',1,1); //untuk cell tanggal lahir
$pdf->SetFont('Arial','',10); // setting jenis font yang akan digunakan
include 'koneksi.php'; // digunakan untuk include file koneksi.php
// ambil semua data mahasiswa dari database akademik2
$mahasiswa = mysqli_query($con, "select * from mahasiswa");
while ($row = mysqli_fetch_array($mahasiswa)){
 $pdf->Cell(20,6,$row['nim'],1,0); //untuk menampilkan kolom nim nya
 $pdf->Cell(50,6,$row['nama'],1,0); //untuk menampilkan kolom nama
 $pdf->Cell(25,6,$row['jkel'],1,0); //untuk menampilkan kolom jenis kelamin
 $pdf->Cell(50,6,$row['alamat'],1,0); //untuk menampilkan kolom alamat
 $pdf->Cell(30,6,$row['tgllhr'],1,1); //untuk menampilkan kolom tanggal lahir
}
$pdf->Output(); //digunakan untuk menampilkan atau meng generate halaman PDF
?>