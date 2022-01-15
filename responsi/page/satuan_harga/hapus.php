<?php
	
	$id = $_GET ['id'];

	$koneksi->query("delete from satuan_harga where id ='$id'");

?>


<script type="text/javascript">
		window.location.href="?page=satuan_harga";
</script>