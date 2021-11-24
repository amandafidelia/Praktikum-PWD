<?php
include "koneksi.php"; //digunakan untuk koneksi dengan database akademik2

$id_user = $_POST['id_user']; //variabel yang menyimpan id_user yang didapat dari form_user
$nama_lengkap = $_POST['nama_lengkap']; //variabel yang menyimpan nama lengkap yang didapat dari form_user
$email = $_POST['email']; //variabel yang menyimpan email yang didapat dari form_user
$pass = md5($_POST[password]); //variabel yang menyimpan password yang didapat dari form_user. disini menggunakan metode md5

//merupakan query insert yang digunakan untuk menambahkan data ke dalam database akademik2 lebih tepatnya ke tabel users
$sql = "INSERT INTO users(id_user,password, nama_lengkap, email) VALUES ('$id_user', '$pass', 
'$nama_lengkap','$email')";
//digunakan untuk mengirimkan perintah query ke database mysql.
//$con disini adalah untuk koneksi database ke akademik2
$query=mysqli_query($con, $sql);

mysqli_close($con); //digunakan untuk menghentikan koneksi php ke server mysql
//jika berhasil membuat users baru maka akan diarahkan ke tampil_user.php
header('location:tampil_user.php');
?>