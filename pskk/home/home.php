<?php 	
include('koneksi3.php');
//instansiasi objek database
$db = new database();
// $data_pegawai = $db->tampil_data();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	
	<br/>
	<a href="insert.php"> Tambah Data</a>
	<br/>
	<a href="cetak.php" target="_blank">CETAK</a>
	<br/>
	
	
<!-- pencarian -->
	<form method="GET" action="home.php" >
  <label>Kata Pencarian : </label>
  <input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
  <button type="submit">Cari</button>
 </form>

 


	<table border="1">
		<tr>
			<!-- <th>No </th> -->
			<th>Nomor Pegawai</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Status</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Opsi</th>
			
		</tr>
		<?php 
		// include 'koneksi2.php';
		// $no = 1;
		// $data = mysqli_query($conn,"select * from karyawan");
		// while($d = mysqli_fetch_array($data)){
			?>

			
<?php
   //untuk menyambungkan dengan file koneksi.php
   include('koneksi2.php');
    //jika kita klik cari, maka yang tampil query cari ini
    if(isset($_GET['kata_cari'])) {
     //menampung variabel kata_cari dari form pencarian
     $kata_cari = $_GET['kata_cari'];
     // mencari data dengan query
     $query = "SELECT * FROM karyawan WHERE NomorPegawai like '%".$kata_cari."%' OR Nama like '%".$kata_cari."%' OR Alamat like '%".$kata_cari."%' ORDER BY NomorPegawai ASC";
    } else {
     //jika tidak ada pencarian, default yang dijalankan query ini
     $query = "SELECT * FROM karyawan ORDER BY NomorPegawai ASC";
    }
    $result = mysqli_query($conn, $query);
    if(!$result) {
     die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }
    //kalau ini melakukan foreach atau perulangan
    while ($d = mysqli_fetch_assoc($result)) {
   ?>

			<tr>
			<!-- array satu dimensi -->
				<!-- <td>  echo $no++; </td> -->
				<td><?php echo $d['NomorPegawai']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['JenisKelamin']; ?></td>
				<td><?php echo $d['Status']; ?></td>
				<td><?php echo $d['TanggalLahir']; ?></td>
				<td><?php echo $d['Alamat']; ?></td>
				<td>
					<a href="edit.php?NomorPegawai=<?php echo $d['NomorPegawai']; ?>">EDIT</a>
					<a href="proses_data.php?action=delete&NomorPegawai=<?php echo $d['NomorPegawai']; ?>">Hapus</a>
					
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	
</body>
</html>