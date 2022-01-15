<?php
include "koneksi.php"; // koneksi database
header('Content-Type: text/xml');
$query = "SELECT * FROM paket_cleaning"; //menampilkan semua data yang ada di tabel mahasiswa
//digunakan untuk mengirimkan perintah query ke database mysql.
//$con disini adalah untuk koneksi database ke akademik2
$hasil = mysqli_query($con,$query);
$jumField = mysqli_num_fields($hasil);
//digunakan untuk deklarasi xml nya
//menggunakan dokumen xml verisi 1.0
echo "<?xml version='1.0'?>";
echo "<data>";
//digunakan untuk menampilkan data dari tabel mahasiswa
while ($data = mysqli_fetch_array($hasil))
{
 echo "<paket_cleaning>";
 echo"<id>",$data['id'],"</id>"; //menampilkan nim
 echo"<paket_cleaning>",$data['paket_cleaning'],"</paket_cleaning>"; //menampilkan nama
 echo"<harga>",$data['harga'],"</harga>"; //menampilkan jenis kelamin
 echo"<satuan_harga>",$data['satuan_harga'],"</satuan_harga>"; //menampilkan alamat
 echo "</paket_cleaning>";
}
echo "</data>";
?>