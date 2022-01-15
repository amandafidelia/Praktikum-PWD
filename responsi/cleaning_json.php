<?php
include "koneksi.php"; //koneksi database
//menampilkan semua data yang ada di tabel mahasiswa berdasarkan urutan nim
$sql="select * from paket_cleaning order by id"; 
//digunakan untuk mengirimkan perintah query ke database mysql.
//$con disini adalah untuk koneksi database ke akademik2
$tampil = mysqli_query($con,$sql);
//jika banyak jumlah baris dari $tampil > 0, maka perintah dibawah ini akan dieksekusi
if (mysqli_num_rows($tampil) > 0) {
$no=1;
$response = array();
 $response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
 $h['id'] = $r['id']; //menampilkan nim
 $h['paket_cleaning'] = $r['paket_cleaning']; //menampilkan nama
 $h['harga'] = $r['harga']; //menampilkan jenis kelamin
 $h['satuan_harga'] = $r['satuan_harga']; //menampilkan alamat
 array_push($response["data"], $h);
 }
 //digunakan untuk mengubah variabel $response yang berisi array menjadi JSON
 echo json_encode($response);
}
else {
 //digunakan untuk menampilkan pesan jika tidak ada data dalam tabel mahasiswa
 $response["message"]="tidak ada data";
 //digunakan untuk mengubah variabel $response yang berisi array menjadi JSON
 echo json_encode($response);
 }
?>