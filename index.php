<?php 
@session_start();
include "functions/koneksi.php";

if(@$_SESSION['admin'] || @$_SESSION['user']) {
?>

	<!DOCTYPE html>
	<html>
		<head>
			<title>Halaman Utama</title>
			<link rel="stylesheet" href="css/main.css"/> 
		</head>
		<body>

			<div id="canvas">
				<div id="header">
					<img src="image/banner_theme.png">
				</div>
			
				<div id="menu">
					<ul>
						<li class="utama"><a href="/myweb">Beranda</a></li>
						<li class="utama"><a href="">Mobil</a>
							<ul>
								<li><a href="?page=mobil">Lihat Data</a></li>
								<li><a href="?page=mobil&action=tambah">Tambah Data</a></li>
							</ul>
						</li>
						<li class="utama"><a href="">Pelanggan</a>
							<ul>
								<li><a href="?page=pelanggan">Lihat Data</a></li>
								<li><a href="">Tambah Data</a></li>
							</ul>
						</li>
						<li class="utama"><a href="">Paket Kredit</a>
							<ul>
								<li><a href="?page=kredit">Lihat Data</a></li>
								<li><a href="">Tambah Data</a></li>
							</ul>
						</li>
						<li class="utama right" style="background-color: #f60;"><a href="functions/logout.php">Logout</a></li>
						<li class="utama right">
							<?php 
								if (@$_SESSION['admin']) {
									$user_terlogin = @$_SESSION['admin'];
								}else if(@$_SESSION['user']){
									$user_terlogin = @$_SESSION['user'];
								}
								$sql_user = mysqli_query($koneksi,"SELECT * FROM tbl_user WHERE kode_user='$user_terlogin'") OR DIE(mysqli_error);
								$data_user = mysqli_fetch_array($sql_user);
							?>
							<a>Selamat datang, <?php echo $data_user['nama_lengkap']; ?></a>
						</li>
					</ul>
				</div>

				<div id="isi">
					<?php 
					$page = @$_GET['page'];
					$action = @$_GET['action'];
					if ($page == "mobil") {
						if ($action == "") {
							include "functions/mobil.php";
						}else if ($action == "tambah") {
							include "functions/tambah_mobil.php";
						}else if ($action == "edit") {
							include "functions/edit_mobil.php";
						}else if ($action == "hapus") {
							include "functions/hapus_mobil.php";
						}		
					}else if ($page == "pelanggan") {
						echo "Ini halaman pelanggan";
					}else if ($page == "kredit") {
						echo "Ini halaman paket kredit";
					}else if ($page == "") {
						echo "Selamat datang di halaman utama";
					}else{
						echo "Error 404 !!! Halaman tidak ditemukan";
					}
					?>
				</div>

				<div id="footer">
					Copyright 2017-Rachman Forniandi. Credits to Yukcoding Beta.
				</div>
			</div>
		</body>
	</html>

<?php 
}else{
	header("location: login.php");
}
?> 