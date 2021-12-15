<?php
include "koneksi.php"; //koneksi database
//menampilkan semua data yang ada di tabel mahasiswa berdasarkan urutan nim
$sql="select * from mahasiswa order by nim"; 
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
$response = array();
 $response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
 $h['nim'] = $r['nim']; //menampilkan nim
 $h['nama'] = $r['nama']; //menampilkan nama
 $h['jkel'] = $r['jkel']; //menampilkan jenis kelamin
 $h['alamat'] = $r['alamat']; //menampilkan alamat
 $h['tgllhr'] = $r['tgllhr']; //menampilkan tanggal lahir
 array_push($response["data"], $h);
 }
 echo json_encode($response);
}
else {
 $response["message"]="tidak ada data";
 echo json_encode($response);
 }
?>