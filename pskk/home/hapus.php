<?php

include 'koneksi2.php';

$NomorPegawai = $_GET['NomorPegawai'];

mysqli_query($conn,"delete from karyawan where NomorPegawai='$NomorPegawai'");

header("location:home.php");