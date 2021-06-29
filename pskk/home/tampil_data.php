<?php 	
include('koneksi3.php');
$db = new database();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
		<tr>
        <th>Nomor Pegawai</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Status</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_barang as $row){
			?>
			<tr>
                <td><?php echo $row['NomorPegawai']; ?></td>
				<td><?php echo $row['Nama']; ?></td>
				<td><?php echo $row['JenisKelamin']; ?></td>
				<td><?php echo $row['Status']; ?></td>
				<td><?php echo $row['TanggalLahir']; ?></td>
				<td><?php echo $row['Alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id_barang']; ?>">Update</a>
					<a href="hapus.php?id=<?php echo $row['id_barang']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>