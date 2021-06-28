<?php 
// koneksi database
include 'koneksi2.php';

// menangkap data yang di kirim dari form
$NomorPegawai = $_POST['NomorPegawai'];
$Nama = $_POST['Nama'];
$JenisKelamin = $_POST['JenisKelamin'];
$Status = $_POST['Status'];
$TanggalLahir = $_POST['TanggalLahir'];
$Alamat = $_POST['Alamat'];

$edit = mysqli_query($conn, "UPDATE karyawan SET Nama='$Nama',JenisKelamin='$JenisKelamin',TanggalLahir='$TanggalLahir',Alamat='Alamat' WHERE NomorPegawai='$NomorPegawai'");
if($edit){
	?>

		<script type="text/javascript">
			window.alert("Edit Data Berhasil");
			document.location='home.php';
		</script>

		<?php

}else{
		?>

		<script type="text/javascript">
			window.alert("Gagal Edit Data");
			document.location='insert.php?';
		</script>
        <?php
    }
?>