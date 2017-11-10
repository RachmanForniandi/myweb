<?php 

$kdmobil = @$_GET['kdmobil'];

mysqli_query($koneksi, "DELETE FROM tbl_mobil WHERE kode_mobil ='$kdmobil'")or die(mysqli_error());

?>

<script type="text/javascript">
	window.location.href="?page=mobil";
</script>