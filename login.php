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
				border-bottom: 3px solid #339966;
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
							<input type="password" name="pass" placeholder="password" class="lg">
						</div>
						<div style="margin-top: 10px;">
							<input type="submit" name="Login" value="login" class="btn">
						</div>
					</form>
				</div>
			</div> 
	</body>
</html>