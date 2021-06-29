<?php 
include('koneksi3.php');
$koneksi = new database();

// $NomorPegawai = $_POST['NomorPegawai'];
// $Nama = $_POST['Nama'];
// $JenisKelamin = $_POST['JenisKelamin'];
// $Status = $_POST['Status'];
// $TanggalLahir = $_POST['TanggalLahir'];
// $Alamat = $_POST['Alamat'];

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['NomorPegawai'],$_POST['Nama'],$_POST['JenisKelamin'],$_POST['Status'],$_POST['TanggalLahir'],$_POST['Alamat']);
	header('location:home.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['Nama'],$_POST['JenisKelamin'],$_POST['TanggalLahir'],$_POST['Alamat'],$_POST['NomorPegawai']);
	header('location:home.php');
}
//proses untuk function delete
elseif($action=="delete")
{
	$NomorPegawai = $_GET['NomorPegawai'];
	$koneksi->delete_data($NomorPegawai);
	header('location:home.php');
}
?>