<?php
	
	$id = $_GET ['id'];

	$koneksi->query("delete from transaksi where id ='$id'");

?>


<script type="text/javascript">
		window.location.href="?page=transaksi";
</script>