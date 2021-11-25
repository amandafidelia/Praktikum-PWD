<?php
include "koneksi.php"; //digunakan untuk koneksi dengan database akademik2

//query yang digunakan untuk menghapus data dalam tabel berdasarkan id_user nya
$sql="delete from users where id_user= '$_GET[id]'";
//digunakan untuk mengirimkan perintah query ke database mysql.
//$con disini adalah untuk koneksi database ke akademik2
mysqli_query($con, $sql);

mysqli_close($conn); //digunakan untuk menghentikan koneksi php ke server mysql
//jika berhasil membuat users baru maka akan diarahkan ke tampil_user.php
header('location:tampil_user.php');
?>