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

// menginput data ke database
$tambah = mysqli_query($conn,"insert into karyawan values('$NomorPegawai','$Nama','$JenisKelamin','$Status','$TanggalLahir','$Alamat')");


// mengalihkan halaman kembali ke index.php

if($tambah){
	?>

		<script type="text/javascript">
			window.alert("Tambah Data Berhasil");
			document.location='home.php';
		</script>

		<?php

}else{
		?>

		<script type="text/javascript">
			window.alert("Gagal Tambah Data");
			document.location='insert.php?';
		</script>
        <?php
    }
?>