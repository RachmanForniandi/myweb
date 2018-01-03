<fieldset>
	<legend>Tambah Data Pelanggan</legend>
	
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
	
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>No. Identitas</td>
				<td>:</td>
				<td><input type="text" name="no_id" required /></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" required/></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" /></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<label><input type="radio" name="jenis_kelamin" value="L" required>Laki-laki</label>
					<br>
					<label><input type="radio" name="jenis_kelamin" value="P" required>Perempuan</label>
				</td>
			</tr>
			<tr>
				<td>No.Telp</td>
				<td>:</td>
				<td><input type="text" name="no_telp" required /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah" /><input type="reset" value="Batal" /></td>
			</tr>
		</table>
	</form>

	<?php
		$no_id= @$_POST['no_id'];
		$nama = @$_POST['nama'];             
		$alamat = @$_POST['alamat'];
		$jenis_kelamin = @$_POST['jenis_kelamin'];
		$no_telp = @$_POST['no_telp'];

		if (@$_POST['tambah']) {
			if (!is_numeric($no_id)) {
				echo '<script type="text/javascript">alert("No. Identitas harus berupa angka!");</script>';
			}else{
				mysqli_query($koneksi,"INSERT INTO tbl_pelanggan(no_id,nama,alamat,jenis_kelamin,no_telp)VALUES('$no_id','$nama','$alamat','$jenis_kelamin','$no_telp')")or die(mysqli_error());
					echo '<script type="text/javascript">alert("Tambah data pelanggan baru berhasil");window.location.href="?page=pelanggan";</script>';	
			}
		}
	?>
</fieldset>