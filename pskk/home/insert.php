<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>

	
	<br/>
	<a href="home.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA Karyawan</h3>
	<form method="post" action="aksi_tambah.php">
		<table>
			<tr>			
				<td>Nomor Pegawai</td>
				<td><input type="text" name="NomorPegawai"></td>
			</tr>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="JenisKelamin"></td>
			</tr>
			<tr>			
				<td>Status</td>
				<td><input type="text" name="Status"></td>
			</tr>
			<tr>			
				<td>Tanggal Lahir</td>
				<td><input type="text" name="TanggalLahir"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>