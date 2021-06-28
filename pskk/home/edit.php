<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>

	
	<br/>
	<a href="home.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA Pegawai</h3>

	<?php
	include 'koneksi2.php';
	$NomorPegawai = $_GET['NomorPegawai'];
	$data = mysqli_query($conn,"select * from karyawan where NomorPegawai='$NomorPegawai'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="aksi_edit.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="NomorPegawai" value="<?php echo $d['NomorPegawai']; ?>">
						<input type="text" name="Nama" value="<?php echo $d['Nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="JenisKelamin" value="<?php echo $d['JenisKelamin']; ?>"></td>
				</tr>
                <tr>
					<td>Status</td>
					<td><input type="text" name="Status" value="<?php echo $d['Status']; ?>"></td>
				</tr>
                <tr>
					<td>Tanggal Lahir</td>
					<td><input type="text" name="TanggalLahir" value="<?php echo $d['TanggalLahir']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>