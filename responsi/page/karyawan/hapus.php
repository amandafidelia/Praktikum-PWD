<?php

	$ambil = $koneksi->query("select * from karyawan where id='$_GET[id]'");

	$data = $ambil->fetch_assoc();

	$foto_produk=$data['foto'];

	if (file_exists("images/$foto_produk")) {
		unlink("images/$foto_produk");
	}

	$koneksi->query("delete from karyawan where id='$_GET[id]'");



?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=karyawan";
</script>