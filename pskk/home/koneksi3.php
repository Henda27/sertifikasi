<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_pskk";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
//penggunaan function untuk menampilkan data
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from karyawan"); //untuk select ini mengambil data dari tabel karyawan
		while($row = mysqli_fetch_array($data)){ //mengcek data array kemudian
			$hasil[] = $row; //menympannya dalam variabel hasil dari row tabel karyawan
		}
		return $hasil; // nilai dari hasil di return kembali
	}

    function delete_data($NomorPegawai) //membuat function delete data
	{
		$query = mysqli_query($this->koneksi,"delete from karyawn where NomorPegawai='$NomorPegawai'"); //ini query untuk delete data dari tabel karyawan berdasarkan nomor pegawai
		
	}

}
?>