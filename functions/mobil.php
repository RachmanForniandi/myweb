<fieldset>
		<legend>Tampil Data Mobil</legend>

	<div style="margin-bottom: 15px;" align="right">
		<form action="" method="post">
			<input type="text" name="input_pencarian" placeholder="Masukan Merk / Type mobil ...." style="width: 200px; padding: 5px;" />
			<input type="submit" name="cari_mobil" value="Cari" style= "padding: 3px;"/>
		</form>
	</div>
		
		<table width="100%" border="1px" style="border-collapse:collapse;">
			<tr style="background-color: #fc0;">
				<th>Kode Mobil</th>
				<th>Merk</th>
				<th>Type</th>
				<th>Warna</th>
				<th>Harga(Rp)</th>
				<th>Gambar</th>
				<th>Opsi</th>
			</tr>

			<?php 
			$input_pencarian = @$_POST['input_pencarian'];
			$cari_mobil = @$_POST['cari_mobil'];
			if ($cari_mobil) {
				if ($input_pencarian != "") {
					$sql = mysqli_query($koneksi,"SELECT * FROM tbl_mobil WHERE merk LIKE '%$input_pencarian%' OR type LIKE '%$input_pencarian%'")or die (mysqli_error());
				}else{
					$sql = mysqli_query($koneksi,"SELECT * FROM tbl_mobil") or die (mysqli_error());
				}
			}else{
				$sql = mysqli_query($koneksi,"SELECT * FROM tbl_mobil") or die (mysqli_error());
			}

			$cek = mysqli_num_rows($sql);
			if ($cek < 1) {
				?>
				<tr>
					<td colspan="7" align="center" style="padding: 10px;"><b>Oops !! Data tidak ditemukan !!</b></td>
				</tr>
				<?php
			}else{

				while($data = mysqli_fetch_array($sql)){
				?>
					<tr>
						<td><?php echo $data['kode_mobil']; ?></td>
						<td><?php echo $data['merk']; ?></td>
						<td><?php echo $data['type']; ?></td>
						<td><?php echo $data['warna']; ?></td>
						<td><?php echo $data['harga']; ?></td>
						<td align="center"><img src="image/<?php echo $data['gambar'];?>" width ="120px"/></td>
						<td align="center">
							<a href="?page=mobil&action=edit&kdmobil=<?php echo $data['kode_mobil']; ?>"><button>Edit</button></a>
							<a onclick="return confirm('Yakin anda ingin menghapus data ini ?')" href="?page=mobil&action=hapus&kdmobil=<?php echo $data['kode_mobil']; ?>"><button>Hapus</button></a>
						</td>
					</tr>
				<?php 
				}
			}
			?>
		</table>
		<div style="padding-top: 10px">
			<a href="laporan/cetak.php" target="_blank"><button>Cetak</button></a>
		</div>
</fieldset>