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
					<td align="center"><button>Edit</button><button>Hapus</button></td>
				</tr>
			<?php 
			}
			?>
		</table>
</fieldset>