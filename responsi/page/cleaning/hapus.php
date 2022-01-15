<?php
	
	$id = $_GET ['id'];

	$koneksi->query("delete from paket_cleaning where id ='$id'");

?>


<script type="text/javascript">
		window.location.href="?page=cleaning";
</script>