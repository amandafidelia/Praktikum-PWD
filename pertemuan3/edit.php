<?php
// digunakan untuk include database nya
include_once("koneksi.php");
// untuk mengecek apakah tombol update sudah di klik atau belum, jika sudah akan masuk ke menu edit
if(isset($_POST['update']))
{ 
 $nim = $_POST['nim'];
 $nama=$_POST['nama'];
 $jkel=$_POST['jkel'];
 $alamat=$_POST['alamat'];
 $tgllhr=$_POST['tgllhr'];
 // digunakan untuk update data mahasiswa
$result = mysqli_query($con, "UPDATE mahasiswa SET 
nama='$nama',jkel='$jkel',alamat='$alamat',tgllhr='$tgllhr' WHERE nim='$nim'");
 // redirect ke halaman index untuk menampilkan hasil yang telah di update
header("Location: index.php");
}
?>
<?php
// menampilkan data mahasiswa yang dipilih berdasarkan id yaitu nim
$nim = $_GET['nim'];
// mengambil data mahasiswa berdasarkan id yaitu nimnya
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$nim'");
while($user_data = mysqli_fetch_array($result))
{
$nim = $user_data['nim'];
$nama = $user_data['nama'];
$jkel = $user_data['jkel'];
$alamat = $user_data['alamat'];
$tgllhr = $user_data['tgllhr'];
}
?>
<html>
<head> 
 <title>Edit Data Mahasiswa</title>
</head>
<body>
 <a href="index.php">Home</a>
 <br/><br/>
<form name="update_mahasiswa" method="post" action="edit.php">
<table border="0">
<tr> 
<td>Nama</td>
<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
</tr>
<tr> 
<td>Gender</td>
<td><input type="text" name="jkel" value=<?php echo $jkel;?>></td>
</tr>
<tr> 
<td>alamat</td>
<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
</tr>
<tr> 
<td>Tgl Lahir</td>
<td><input type="text" name="tgllhr" value=<?php echo $tgllhr;?>></td>
</tr>
<tr>
<td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>