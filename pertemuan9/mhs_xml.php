<?php
include "koneksi.php"; // koneksi database
header('Content-Type: text/xml');
$query = "SELECT * FROM mahasiswa"; //menampilkan semua data yang ada di tabel mahasiswa
$hasil = mysqli_query($con,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<mahasiswa>";
 echo"<nim>",$data['nim'],"</nim>"; //menampilkan nim
 echo"<nama>",$data['nama'],"</nama>"; //menampilkan nama
 echo"<jkel>",$data['jkel'],"</jkel>"; //menampilkan jenis kelamin
 echo"<alamat>",$data['alamat'],"</alamat>"; //menampilkan alamat
 echo"<tgllhr>",$data['tgllhr'],"</tgllhr>"; //menampilkan tanggal lahir
 echo "</mahasiswa>";
}
echo "</data>";
?>