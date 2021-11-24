<?php
session_start(); //digunakan untuk memulai eksekusi session pada server kemudian disimpan pada browser
include "koneksi.php"; //digunakan untuk koneksi database

$id_user = $_POST['id_user']; //variabel yang menyimpan id_user yang didapat dari form_login
$pass=md5($_POST['paswd']); //variabel yang menyimpan password yang didapat dari form_login

//query yang digunakan untuk membaca (read) semua data dari tabel users berdasarkan id_user=$id_user dan password=$pass
$sql="SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";
//digunakan untuk mengirimkan perintah query ke database mysql.
//$con disini adalah untuk koneksi database ke akademik2

//menangkap inputan code captchanya
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {

$login=mysqli_query($con,$sql);
$ketemu=mysqli_num_rows($login);
$r= mysqli_fetch_array($login);

if ($ketemu > 0){
	//digunakan untuk menyimpan informasi id_user ke dalam variabel session dengan nama iduser
 	$_SESSION['iduser'] = $r['id_user'];
 	//digunakan untuk menyimpan informasi password ke dalam variabel session dengan nama passuser
 	$_SESSION['passuser'] = $r['password'];
 	//jika users berhasil login, maka akan ada pesan seperti dibawah ini
	echo"USER BERHASIL LOGIN<br>";
	//dan akan menampilkan informasi id_user nya
	echo "id user =",$_SESSION['iduser'],"<br>";
	//dan menampilkan informasi passwordnya (password md5)
	echo "password=",$_SESSION['passuser'],"<br>";
	//digunakan untuk tombol logout
	echo "<a href=logout.php><b>LOGOUT</b></a></center>";
}

else{
	echo "<center>Login gagal! username & password tidak benar<br>";
	echo "<a href=form_login.php><b>ULANGILAGI</b></a></center>";
}

mysqli_close($con); //digunakan untuk menghentikan koneksi php ke server mysql
}

else {
	echo "<center>Login gagal! Captcha tidak sesuai<br>";
 	echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>"; 
}

?>