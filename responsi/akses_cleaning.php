<?php
//digunakan untuk mengakses file getdatamhs.php yang terdapat pada url dibawha ini.
$url = "http://localhost/PWD/responsi/getdatacleaning.php";
//digunakan untuk melakukan inisialisasi, dengan url yang dituju yaitu ada pada variabel $url
$client = curl_init($url);
//digunakan untuk menampilkan isi halaman dari url $client
//yaitu http://localhost/PWD/pert10/getdatamhs.php
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
//digunakan untuk mengeksekusi url pada variabel $client
$response = curl_exec($client);
//untuk menerjemahkan string JSON agar mudah saat akan diolah datanya
$result = json_decode($response);
foreach ($result as $r) {
 echo "<p>";
 echo "ID : " . $r->id . "<br />"; //menampilkan nim
 echo "Paket Cleaning : " . $r->paket_cleaning . "<br />"; //menampilkan nama
 echo "Harga : " . $r->harga . "<br />"; //menampilkan jenis kelamin
 echo "Satuan Harga : " . $r->satuan_harga . "<br />"; //menampilkan alamat
 echo "</p>";
}