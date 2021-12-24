<?php
//digunakan untuk mengakses file getdatamhs_cari.php yang terdapat pada url dibawha ini.
$url = "http://localhost/PWD/pert10/postest/getdatamhs_cari.php";
//digunakan untuk melakukan inisialisasi, dengan url yang dituju yaitu ada pada variabel $url
$client = curl_init($url);
//digunakan untuk menampilkan isi halaman dari url $client
//yaitu http://localhost/PWD/pert10/postest/getdatamhs_cari.php
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
//digunakan untuk mengeksekusi url pada variabel $client
$response = curl_exec($client);
//untuk menerjemahkan string JSON agar mudah saat akan diolah datanya
$result = json_decode($response);
foreach ($result as $r) {
 echo "<p>";
 echo "NIM : " . $r->nim . "<br />"; //menampilkan nim
 echo "Nama : " . $r->nama . "<br />"; //menampilkan nama
 echo "jenis kel : " . $r->jkel . "<br />"; //menampilkan jenis kelamin
 echo "Alamat : " . $r->alamat . "<br />"; //menampilkan alamat
 echo "Tgl Lahir : " . $r->tgllhr . "<br />"; //menampilkan tanggal lahir
 echo "</p>";
}