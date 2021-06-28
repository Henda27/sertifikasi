<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <center>
        <h2>LAPORAN DATA Karyawan</h2>
        <hr />
    </center>
    <table border="1" style="width: 100%">
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
        </tr>
        <?php 
        }
        ?>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>