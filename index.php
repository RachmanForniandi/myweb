<?php 
@session_start();
include "functions/koneksi.php";

if(@$_SESSION['admin'] || @$_SESSION['user']) {
?>

	<!DOCTYPE html>
	<html>
		<head>
			<title>Halaman Utama</title>
				<style type="text/css">
					body{
						font-family: arial;
						font-size: 14px;
					}

					#canvas{
						width: 960px;
						margin: 0 auto;
						border: 1px solid silver;
					}

					#header{
						font-size: 20px;
						padding: 20px;
					}

					#menu{
						background-color: #0066ff;
					}

					#menu ul{
						list-style: none;
						padding: 0;
						margin: 0;
					}

					#menu ul li.utama{
						display: inline-table;
					}

					#menu ul li:hover{
						background-color: #0033cc;
					}

					#menu ul li a{
						display: block;
						text-decoration: none;
						line-height: 40px;
						padding: 0 10px;
						color: #fff;
					}

					.utama ul{
						display: none;
						position: absolute;
						z-index: 2;
					}

					.utama:hover ul{
						display: block;
					}

					.utama ul li{
						display: block;
						background-color: #6cf;
						width: 140px;
					}

					#isi{
						min-height: 400px;
						padding: 20px;		
					}

					#footer{
						text-align: center;
						padding: 20px;
						background-color: #ccc;	
					}
				</style>
		</head>
		<body>
			<div id="canvas">
				<div id="header">
					Penjualan Mobil
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
						<li class="utama" style="float: right;"><a href="functions/logout.php">Logout</a></li>
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