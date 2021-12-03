<?php
//digunakan untuk koneksi dengan database akademik2
include 'koneksi.php';
?>
<!--digunakan untuk form pencarian data KHS-->
<h3>Form Pencarian DATA KHS Dengan PHP </h3>
<form action="" method="get"> <!--menggunakan method get-->
	<label>Cari :</label>
	<input type="text" name="cari"> <!--untuk inputan kata kunci pencarian-->
	<input type="submit" value="Cari"> <!--tombol submit cari-->
</form>
<?php
	if(isset($_GET['cari'])){ //akan dicek apakah tombol cari sudah di klik
	$cari = $_GET['cari']; //menangkap inputan dari kolom pencarian dan disimpan dalam variabel $cari
	echo "<b>Hasil pencarian : ".$cari."</b>"; // jika sudah maka akan menampilkan hasil pencariannya
	}
?>
<table border="1">
	<tr>
		<th>No</th> <!--judul kolom Nomor-->
		<th>NIM</th> <!--judul kolom NIM-->
		<th>Nama</th> <!--judul kolom Nama-->
		<th>Kode MK</th> <!--judul kolom Kode MK-->
		<th>Nama MK</th> <!--judul kolom Nama MK-->
		<th>Nilai</th> <!--judul kolom Nilai-->
	</tr>
	<?php
		if(isset($_GET['cari'])){ //akan dicek apakah tombol cari sudah di klik
			$cari = $_GET['cari']; //menangkap inputan dari kolom pencarian dan disimpan dalam variabel $cari
			//query dibawah ini digunakan untuk menampilkan nim, nama, kode mk, nama mk, dan nilai dengan cara menggabungkan 3 tabel khs, mahasiswa dan matakuliah dengan menggunakan inner join. dan pencariannya berdasarkan NIM mahasiswa
			$sql="SELECT mahasiswa.nim, mahasiswa.nama, matakuliah.kode_mk, matakuliah.nama_mk, KHS.nilai FROM khs INNER JOIN mahasiswa ON khs.nim=mahasiswa.nim INNER JOIN matakuliah ON khs.kode_mk=matakuliah.kode_mk WHERE khs.nim LIKE'%".$cari."%'";
			$tampil = mysqli_query($con,$sql);
		}else{
			//query dibawah ini digunakan untuk menampilkan nim, nama, kode mk, nama mk, dan nilai dengan cara menggabungkan 3 tabel khs, mahasiswa dan matakuliah dengan menggunakan inner join.
			$sql="SELECT mahasiswa.nim, mahasiswa.nama, matakuliah.kode_mk, matakuliah.nama_mk, KHS.nilai FROM khs INNER JOIN mahasiswa ON khs.nim=mahasiswa.nim INNER JOIN matakuliah ON khs.kode_mk=matakuliah.kode_mk";
			$tampil = mysqli_query($con,$sql);
		}
		$no = 1;
		while($r = mysqli_fetch_array($tampil)){
	?>
	<tr>
		<td><?php echo $no++; ?></td> <!--menampilkan nomor-->
		<td><?php echo $r['nim']; ?></td> <!--menampilkan nim-->
		<td><?php echo $r['nama']; ?></td> <!--menampilkan nama mhs-->
		<td><?php echo $r['kode_mk']; ?></td> <!--menampilkan kode_mk-->
		<td><?php echo $r['nama_mk']; ?></td> <!--menampilkan nama_mk-->
		<td><?php echo $r['nilai']; ?></td> <!--menampilkan nilai-->
	</tr>
<?php } ?>
</table>