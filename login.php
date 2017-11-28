<?php 
@session_start();
include "functions/koneksi.php";

if(@$_SESSION['admin']) {
	header("location: index.php");
}else if (@$_SESSION['user']) {
	header("location:user/index.php");
}
?>

	<!DOCTYPE html>
	<html>
		<head>
			<title>Halaman Login</title>
			<link rel="stylesheet" href="css/style.css">
		</head>
		<body>
				<div id="utama">
					<div id="judul">
						Halaman Login
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
								<input type="submit" name="login" value="login" class="btn">
								<span style='margin-left: 130px;'>
									<a href='register.php' class="btn-right">Register</a>
								</span>
							</div>
						</form>

						<?php
							$user = @$_POST['username'];
							$pass = @$_POST['password'];
							$login = @$_POST['login'];

							if ($login) {
								if ($user == "" || $pass == "") {
								?><script type="text/javascript">alert("Username / Password tidak boleh kosong")</script><?php	
								}else{
									$sql = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username ='$user' AND password = md5('$pass')") or die(mysqli_error());
									$data = mysqli_fetch_array($sql);
									$cek = mysqli_num_rows($sql);
									if($cek >= 1){
										if ($data['level'] == "admin") {
											@$_SESSION['admin'] = $data['kode_user'];
											header("location: index.php");
										}else if ($data['level']== "user") {
											@$_SESSION['user'] = $data['kode_user'];
											header("location: user/index.php");
										}
									}else{
										echo "Login gagal. Silahkan coba lagi.";
									}
								}
							}
						?>
					</div>
				</div> 
		</body>
	</html>


?>

