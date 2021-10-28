<html>
<head>
	<title>Validasi Perhitungan Nilai Mahasiswa</title>
</head>
<body bgcolor=#ded3a6>
	<br>
	<h1 align=center>Validasi Data Perhitungan Nilai Mahasiswa</h1><br>
	<form method=post action="validasi_data.php">
		<table border=1 align=center width=500px height=300px>
			<tr>
				<td colspan=2 align=center bgcolor=#ab8a09><b>Data Mahasiswa</b></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type=text name=nim size=15 maxlength=10></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type=text name=nama size=25 maxlength=30></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>
					<select name=tanggal>
						<option value=0>Pilih</option>
						<?php
							for($tgl=1;$tgl<=31;$tgl++)
								echo "<option value=$tgl>$tgl</option>";
						?>
						</select> -
						<select name=bulan>
							<option value=0>Pilih</option>
							<option value=1>Januari</option>
							<option value=2>Februari</option>
							<option value=3>Maret</option>
							<option value=4>April</option>
							<option value=5>Mei</option>
							<option value=6>Juni</option>
							<option value=7>Juli</option>
							<option value=8>Agustus</option>
							<option value=9>September</option>
							<option value=10>Oktober</option>
							<option value=11>November</option>
							<option value=12>Desember</option>
						</select> -
						<select name=tahun>
							<option value=0>Pilih</option>
							<?php
								for($thn=2005;$thn>=1990;$thn--)
									echo "<option>$thn</option>";
							?>
						</select>
				</td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><input type=text name=prodi size=25 maxlength=30></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><input type=text name=semester size=15 maxlength=10></td>
			</tr>
			<tr>
				<td>Mata Kuliah</td>
				<td><input type=text name=matkul size=25 maxlength=30></td>
			</tr>
			<tr>
				<td colspan=2 align=center bgcolor=#ab8a09><b>Komponen Nilai</b></td>
			</tr>
			<tr>
				<td>Tugas </td>
				<td><input type=text name=tugas size=4 maxlength=3></td>
			</tr>
			<tr>
				<td>UK </td>
				<td><input type=text name=uk size=4 maxlength=3></td>
			</tr>
			<tr>
				<td>UTS </td>
				<td><input type=text name=uts size=4 maxlength=3></td>
			</tr>
			<tr>
				<td>UAS </td>
				<td><input type=text name=uas size=4 maxlength=3></td>
			</tr>
			<tr bgcolor=#ab8a09>
				<td>&nbsp;</td>
				<td><input type=submit name=submit value="Hitung"></td>
			</tr>
		</table>
	</form>
</body>
</html>