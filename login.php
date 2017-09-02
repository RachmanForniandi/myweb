<?php 
@session_start();
include "functions/koneksi.php";

if(@$_SESSION['admin'] || @$_SESSION['user']) {
	header("location: index.php");
}else{
?>

	<!DOCTYPE html>
	<html>
		<head>
			<title>Halaman Login</title>
			<style type="text/css">
				body{
					font-family: arial;
					font-size: 14px;
					background-color: #222;
				}

				#utama{
					width: 300px;
					margin: 0 auto;
					margin-top: 12%;
				}

				#judul{
					padding: 15px;
					text-align: center;
					color: #fff;
					font-size: 20px;
					background-color: #339966;
					border-top-right-radius: 10px;
					border-top-left-radius: 10px;
					border-bottom: 3px solid #336666;
				}

				#inputan{
					background-color: #ccc;
					padding: 20px;
					border-bottom-right-radius: 10px;
					border-bottom-left-radius: 10px;
				}

				input{
					padding: 10px;
					border: 0;
				}

				.lg{
					width: 240px;
				}

				.btn{
					background-color: #339966;
					border-radius: 10px;
					color: #fff;
				}

				.btn:hover{
					background-color: #339966;
					cursor: pointer;
				}

			</style>
		</head>
		<body>
				<div id="utama">
					<div id="judul">
						Halaman Login
					</div>

					<div id="inputan">
						<form action="" method="POST">
							<div>
								<input type="text" name="user" placeholder="Username" class="lg">
							</div>
							<div style="margin-top: 10px;">
								<input type="password" name="password" placeholder="password" class="lg">
							</div>
							<div style="margin-top: 10px;">
								<input type="submit" name="login" value="login" class="btn">
							</div>
						</form>

						<?php
							$user = @$_POST['user'];
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
											header("location: index.php");
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

<?php 
}
?>

