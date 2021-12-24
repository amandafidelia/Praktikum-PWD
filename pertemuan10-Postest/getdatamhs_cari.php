<?php
//digunakan untuk menyertakan/memasukkan file koneksi.php ke dalam file getdatamhs_cari.php
require_once "koneksi.php";
//menampilkan data hasil pencarian dengan kata kuncinya nim
//saya mencari mahasiswa dengan nim=MHS05
$sql = "select * from mahasiswa where nim = 'MHS05'";
//digunakan untuk mengirimkan perintah query ke database mysql.
//$con disini adalah untuk koneksi database ke akademik2
$query = mysqli_query($con,$sql);
//digunakan untuk mengembalikan nilai berupa array associative.
while ($row = mysqli_fetch_assoc($query)) {
 $data[] = $row;
}
header('content-type: application/json');
//digunakan untuk mengubah variabel $data yang berisi array menjadi JSON
echo json_encode($data);
//untuk menutup koneksi
mysqli_close($con);
?>