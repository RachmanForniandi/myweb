<fieldset>
		<legend><b>Edit Profil</b></legend>

		<?php 
		if (@$_SESSION['admin']) {
			$sesi = @$_SESSION['admin'];
		}else if (@$_SESSION['user']) {
			$sesi = @$_SESSION['user'];
		}

		$sql_profil = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE kode_user ='$sesi' ")OR DIE(mysqli_error());
		$data = mysqli_fetch_array($sql_profil);
		?>

		<form action="" method="post">
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama_lengkap']; ?>" required/></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<label><input type="radio" name="jenis_kelamin" value="Laki-laki" required <?php if ($data['jenis_kelamin'] =='Laki-laki'){echo "checked";} ?> />Laki-laki</label>
					<br>
					<label><input type="radio" name="jenis_kelamin" value="Perempuan" required <?php if ($data['jenis_kelamin'] =='Perempuan'){echo "checked";}?> />Perempuan</label>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea type="text" name="alamat" required><?php echo $data['alamat']; ?></textarea></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" value="<?php echo $data['username']; ?>" required /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="pass" value="<?php echo $data['pass']; ?>" required /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="edit" value="Edit" /><input type="reset" value="Batal" /></td>
			</tr>
		</table>
	</form>
	<?php 
	if (@$_POST['edit']) {
		$nama = mysqli_real_escape_string($_POST['nama']);
		$jenis_kelamin = mysqli_real_escape_string($_POST['jenis_kelamin']);
		$alamat = mysqli_real_escape_string($_POST['alamat']);
		$user = mysqli_real_escape_string($_POST['username']);
		$pass = mysqli_real_escape_string($_POST['pass']);
		mysqli_query($koneksi, "UPDATE tbl_user SET nama_lengkap ='$nama', jenis_kelamin ='$jenis_kelamin', alamat = '$alamat', username ='$user', pass = '$pass', password = md5('$pass') WHERE kode_user ='$sesi' ") OR DIE(mysqli_error());
		header("location: ?page=editprofil");
	}
	?>
</fieldset>