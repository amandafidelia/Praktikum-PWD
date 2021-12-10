<?php
// membuat koneksi db dengan menggunakan file konfigurasi
include_once("koneksi.php");
// ambil semua data mahasiswa dari database akademik2
$result = mysqli_query($con, "SELECT * FROM mahasiswa ");
?>
<html>
<head> 
 <title>Halaman Utama</title> 
</head>
<body>
<!--digunakan sebagai tombol untuk menambah data baru-->
<br><a href="tambah.php"><button>Tambah Data Baru</button></a><br/><br/>
 <table width='80%' border=1>
 <!--berikut ini adalah modifikasi untuk penambahan fungsional cetak-->
 <!--jadi disini akan mengarahkan ke cetak.php untuk mencetak dokumennya-->
 <a href="cetak.php"><button>Cetak Dokumen</button></a><br/><br/>
 <table width='80%' border=1>
 <tr>
 	<!--untuk judul kolom tabelnya-->
 <th>Nim</th> <th>Nama</th> <th>Gender</th> <th>Alamat</th> 
 <th>tgl lahir</th> <th>Update</th>
 </tr>
<?php 
while($user_data = mysqli_fetch_array($result)) { 
 echo "<tr>";
 echo "<td>".$user_data['nim']."</td>"; //untuk menampilkan kolom nim nya
 echo "<td>".$user_data['nama']."</td>";  //untuk menampilkan kolom nama
 echo "<td>".$user_data['jkel']."</td>"; //untuk menampilkan kolom jenis kelamin
 echo "<td>".$user_data['alamat']."</td>";  //untuk menampilkan kolom alamat
 echo "<td>".$user_data['tgllhr']."</td>"; //untuk menampilkan kolom tanggal lahir
 //digunakan untuk tombol edit dan hapus, dengan menggunakan id nya yaitu nim
 echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a 
href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>"; 
}
?>
</table>
</body>
</html>