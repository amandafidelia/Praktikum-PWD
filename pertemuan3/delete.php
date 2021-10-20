<?php
// untuk koneksi databse nya
include_once("koneksi.php");
// mendapatkan id yaitu nim, dari url untuk menghapus data mahasiswa
$nim = $_GET['nim'];
// menghapus baris data mahasiswa berdasarkan id yang diberikan, yaitu menggunakan nim
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim='$nim'");
// Setelah menghapus di redirect ke Home, dan data mahasiswa terbaru akan ditampilkan.
header("Location:index.php");
?>