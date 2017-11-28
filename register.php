	<!DOCTYPE html>
	<html>
		<head>
			<title>Halaman Register</title>
			<link rel="stylesheet" href="css/style.css">
		</head>
		<body>
				<div id="utama" style="margin-top: 10%;">
					<div id="judul">
						Halaman Register
					</div>

					<div id="inputan">
						<form action="" method="POST">
							<div>
								<input type="text" name="username" placeholder="Username" class="lg">
							</div>
							<div style="margin-top: 10px;">
								<input type="password" name="password" placeholder="Password" class="lg">
							</div>
							<div style="margin-top: 10px;">
								<input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="lg">
							</div>
							<div style="margin-top: 10px;">
								<select name="jenis_kelamin">
									<option value="">- Jenis Kelamin -</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<div style="margin-top: 10px;">
								<textarea name="alamat" class="lg" placeholder="Alamat"></textarea>
							</div>
							<div style="margin-top: 10px;">
								<input type="submit" name="register" value="Register" class="btn">
								<span style='margin-left: 130px;'>
									<a href='login.php' class="btn-right">Login</a>
								</span>
							</div>
						</form>
						<?php
						include "functions/koneksi.php";
						if (@$_POST['register']) {
							$user = @$_POST['username'];
							$pass = @$_POST['password'];
							$nama_lengkap= @$_POST['nama_lengkap'];
							$jenis_kelamin = @$_POST['jenis_kelamin'];
							$alamat = @$_POST['alamat'];

							if ($user == "" || $pass == "" || $nama_lengkap == "" || $jenis_kelamin == "" || $alamat == "") {
								?><script type="text/javascript">alert('Input tidak boleh ada yang kosong !');</script><?php 
							}else{
								$sql_insert_data = mysqli_query($koneksi,"INSERT INTO tbl_user VALUES ('','$user', md5('$pass'), '$nama_lengkap', '$jenis_kelamin', '$alamat', 'user')");
								if ($sql_insert_data) {
									?><script type="text/javascript">alert('Pendaftaran berhasil, Silahkan lanjut ke login');</script><?php
								}
							}
						}
						?>
					</div>
				</div> 
		</body>
	</html>



