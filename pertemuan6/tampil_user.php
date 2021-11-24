<?php
echo "<h2>User</h2>
<form method=POST action=form_user.php>
	<input type=submit value='Tambah User'>
</form>

<table border=1>
	<tr>
		<th>No</th>
		<th>Username</th>
		<th>NamaLengkap</th>
		<th>Email</th>
		<th>Aksi</th>
	</tr>";

include "koneksi.php"; //digunakan untuk koneksi dengan database akademik2

//query yang digunakan untuk membaca (read) semua data dari tabel users berdasarkan id_user terkecil ke terbesar
$sql="select * from users order by id_user";
//digunakan untuk mengirimkan perintah query ke database mysql.
//$con disini adalah untuk koneksi database ke akademik2
$tampil = mysqli_query($con,$sql);

if (mysqli_num_rows($tampil) > 0) {
	$no=1;

	while ($r = mysqli_fetch_array($tampil)){
		//menampilkan nomor, id_user, nama_lengkap, email, dan aksinya yaitu dapat melakukan penghapusan data users nya
		echo "<tr><td>$no</td><td>$r[id_user]</td> 
		<td>$r[nama_lengkap]</td>
		<td>$r[email]</td>
		<td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a></td>
		</tr>";
 		$no++;
	}

echo "</table>";
} else {
 	echo "0 results";
 }
 
 mysqli_close($con); //digunakan untuk menghentikan koneksi php ke server mysql
?>