<html>
<head>
	<title>Perhitungan Nilai</title>
</head>
<body bgcolor=#ded3a6>
	<?php
		//AWAL VALIDASI DATA
		$ada_error=false;
		$pesan_error="<b>Kesalahan yang terjadi :</b><br>";

		$nim = $_POST["nim"];
		$nama = $_POST["nama"];
		$tanggal= $_POST["tanggal"];
		$bulan = $_POST["bulan"];
		$tahun = $_POST["tahun"];
		$prodi= $_POST["prodi"];
		$semester= $_POST["semester"];
		$matkul= $_POST["matkul"];
		$tugas = $_POST["tugas"];
		$uk = $_POST["uk"];
		$uts = $_POST["uts"];
		$uas = $_POST["uas"];

		$nim=trim($nim);
		if(strlen($nim)<10){
			$pesan_error=$pesan_error."-Panjang NIM harus 10 digit angka<br>";
			$ada_error=true;
		}
		if(!preg_match("/^[0-9]*$/",$nim)){
			$pesan_error.="-NIM Hanya boleh angka<br>";
			$ada_error=true;
		}

		$nama=trim($nama);
		if(strlen($nama)<2){
			$pesan_error=$pesan_error."-Panjang Nama Minimal 2 Huruf<br>";
			$ada_error=true;
		}

		if(($tanggal==0)or($bulan==0)or($tahun==0)){
			$pesan_error.="-Tanggal Lahir harus diisi dengan lengkap<br>";
			$ada_error=true;
		}

		if(!checkdate($bulan,$tanggal,$tahun))// if checkdate == false
		{
			$pesan_error.="-Tanggal Lahir tidak sah<br>";
			$ada_error=true;
		}

		$prodi=trim($prodi);
		if(!preg_match("/^[a-zA-Z]*$/",$prodi)){
			$pesan_error.="-Prodi hanya boleh huruf<br>";
			$ada_error=true;
		}

		$semester=trim($semester);
		if(!preg_match("/^[1-9]*$/",$semester)){
			$pesan_error.="-Semester hanya boleh angka<br>";
			$ada_error=true;
		}

		$matkul=trim($matkul);
		if(!preg_match("/^[a-zA-Z ]*$/",$matkul)){
			$pesan_error.="-Mata Kuliah hanya boleh huruf<br>";
			$ada_error=true;
		}

		if(!preg_match("/^[0-9]*$/",$tugas)){
			$pesan_error.="-Nilai Tugas Hanya boleh angka<br>";
			$ada_error=true;
		}
		if(($tugas<0)||($tugas>100)){
			$pesan_error.="-Nilai Tugas harus 0 s/d 100<br>";
			$ada_error=true;
		}

		if(!preg_match("/^[0-9]*$/",$uk)){
			$pesan_error.="-Nilai UK Hanya boleh angka<br>";
			$ada_error=true;
		}
		if(($uk<0)||($uk>100)){
			$pesan_error.="-Nilai UK harus 0 s/d 100<br>";
			$ada_error=true;
		}

		if(!preg_match("/^[0-9]*$/",$uts)){
			$pesan_error.="-Nilai UTS Hanya boleh angka<br>";
			$ada_error=true;
		}
		if(($uts<0)||($uts>100)){
			$pesan_error.="-Nilai UTS harus 0s/d 100<br>";
			$ada_error=true;
		}

		if(!preg_match("/^[0-9]*$/",$uas)){
			$pesan_error.="-Nilai UAS Hanya boleh angka<br>";
			$ada_error=true;
		}
		if(($uas<0)||($uas>100)){
			$pesan_error.="-Nilai UAS harus 0 s/d 100<br>";
			$ada_error=true;
		}

		if($ada_error)//if($ada_error==true)
		{
			echo "<br><b>Proses perhitungan nilai dibatalkan karena Data yang anda isikan tidak valid.</b>
				<br>$pesan_error<br>
				<a href='javascript:history.back();'><button>Input Ulang</button></a>";
		}

		else
		if(!$ada_error)//if($ada_error==false)
		{
	?>
			<br>
			<h1 align=center>Validasi Data Perhitungan Nilai Mahasiswa</h1><br>
			<table border=1 align=center width=500px height=300px>
				<tr>
					<td colspan=2 align=center bgcolor=#ab8a09>Data Mahasiswa</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><?php echo $nim;?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><?php echo $nama;?></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><?php echo "$tanggal - $bulan - $tahun"; ?></td>
				</tr>
				<tr>
					<td>Prodi</td>
					<td><?php echo $prodi;?></td>
				</tr>
				<tr>
					<td>Semester</td>
					<td><?php echo $semester;?></td>
				</tr>
				<tr>
					<td>Mata Kuliah</td>
					<td><?php echo $matkul;?></td>
				</tr>
				<tr>
					<td colspan=2 align=center bgcolor=#ab8a09>Hasil Perhitungan Nilai</td>
				</tr>
				<tr>
					<td>Tugas </td>
					<td><?php echo number_format($tugas,2);?></td>
				</tr>
				<tr>
					<td>UK </td>
					<td><?php echo number_format($uk,2);?></td>
				</tr>
				<tr>
					<td>UTS </td>
					<td><?php echo number_format($uts,2);?></td>
				</tr>
				<tr>
					<td>UAS </td>
					<td><?php echo number_format($uas,2);?></td>
				</tr>
				<tr>
					<td><b>Nilai Akhir </b></td>
					<td>
						<?php
							$na=0.2*$tugas+0.2*$uk+0.3*$uts+0.3*$uas;
							echo "<b>".number_format($na,2)."</b>";
						?>
					</td>
				</tr>
			</table>
			<br>
			<center>
				<a href="index.php"><button>Menu Utama</button></a>
			</center>
	<?php
		}//end of if(!$ada_error)
	?>
</body>
</html>