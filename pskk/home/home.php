<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	
	<br/>
	<a href="insert.php"> Tambah Data</a>
	<br/>
	<br/>
	
	<form action="index.php" method="get">
	<label>Cari :</label>
	<input type="text" Nama="cari">
	<input type="submit" value="Cari">
	</form>

	<?php 
		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		echo "<b>Hasil pencarian : ".$cari."</b>";
	}
	?>

	<table border="1">
		<tr>
			<th>No </th>
			<th>Nomor Pegawai</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Status</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Opsi</th>
			
		</tr>
		<?php 
		include 'koneksi2.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from karyawan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NomorPegawai']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['JenisKelamin']; ?></td>
				<td><?php echo $d['Status']; ?></td>
				<td><?php echo $d['TanggalLahir']; ?></td>
				<td><?php echo $d['Alamat']; ?></td>
				<td>
					<a href="edit.php?NomorPegawai=<?php echo $d['NomorPegawai']; ?>">EDIT</a>
					<a href="hapus.php?NomorPegawai=<?php echo $d['NomorPegawai']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>