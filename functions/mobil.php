<fieldset>
	<legend>Tampil Data Mobil</legend>

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
			$sql = mysqli_query($koneksi,"SELECT * FROM tbl_mobil") or die (mysqli_error());
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
			?>
		</table>
</fieldset>