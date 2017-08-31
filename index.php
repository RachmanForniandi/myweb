<!DOCTYPE html>
<html>
	<head>
		<title>Desain Web dan Menu Dropdown Sederhana</title>
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
					<li class="utama"><a href="">Beranda</a></li>
					<li class="utama"><a href="">Mobil</a>
						<ul>
							<li><a href="">Lihat Data</a></li>
							<li><a href="">Tambah Data</a></li>
						</ul>
					</li>
					<li class="utama"><a href="">Pelanggan</a></li>
				</ul>
			</div>

			<div id="isi">
				bagian isi
			</div>

			<div id="footer">
				Copyright 2017-Rachman Forniandi. Credits for Yukcoding Beta.
			</div>
		</div>
	</body>
</html>