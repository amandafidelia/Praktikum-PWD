<?php
//digunakan untuk menyertakan/memasukkan file koneksi.php ke dalam file getdatamhs.php
require_once "koneksi.php";
//menampilkan semua data yang ada di tabel mahasiswa
$sql = "select * from paket_cleaning";
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