<fieldset>
	<legend>Tambah Data Mobil</legend>
	
	<?php 
	$carikode = mysqli_query($koneksi,"SELECT max(kode_mobil)FROM tbl_mobil") or die(mysqli_error());
	$datakode = mysqli_fetch_array($carikode);
	if ($datakode) {
		$nilaikode = substr($datakode[0], 1);
		$kode = (int) $nilaikode;
		$kode = $kode + 1;
		$hasilkode = "M".str_pad($kode, 5, "0", STR_PAD_LEFT);
	}else{
		$hasilkode = "M00001";
	}
	?>
	
	<form action="" method="post">
		<table>
			<tr>
				<td>Kode Mobil</td>
				<td>:</td>
				<td><input type="text" name="kode_mobil" value="<?php echo $hasilkode ?>" /></td>
			</tr>
			<tr>
				<td>Merk</td>
				<td>:</td>
				<td><input type="text" name="merk" /></td>
			</tr>
			<tr>
				<td>Type</td>
				<td>:</td>
				<td><input type="text" name="type" /></td>
			</tr>
			<tr>
				<td>Warna</td>
				<td>:</td>
				<td><input type="text" name="warna" /></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah" /><input type="reset" value="Reset" /></td>
			</tr>
		</table>
	</form>

	<?php
	$kode_mobil = @$_POST['kode_mobil'];
	$merk = @$_POST['merk'];             
	$type = @$_POST['type'];
	$warna = @$_POST['warna'];
	$harga = @$_POST['harga'];
	
	$tambah_mobil = @$_POST['tambah'];

	if ($tambah_mobil) {
		if ($kode_mobil == "" || $merk == "" || $type == "" || $warna== "" || $harga == "") {
			?>
			<script type="text/javascript">
			alert("Input data tidak boleh ada yang kosong") ;
			</script>
			<?php
		}else{
			mysqli_query($koneksi,"INSERT INTO tbl_mobil VALUES('$kode_mobil','$merk','$type','$warna','$harga')")or die(mysqli_error());
			?>
			<script type="text/javascript">
			alert("tambah data mobil baru berhasil");
			window.location.href="?page=mobil";
			</script>
			<?php
		}
	}
	?>
</fieldset>