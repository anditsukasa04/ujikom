<?php
error_reporting(E_ALL ^ E_NOTICE);

$con = mysqli_connect("localhost", "root", "", "ujikom1");

$q = mysqli_query(
	$con,
	"UPDATE berobat SET 
			Pasien_ID='$_POST[pasien_id]',
			Tanggal_Berobat='$_POST[tahun]-$_POST[bulan]-$_POST[tanggal]',
			Dokter_ID='$_POST[dokter_id]',
			Keluhan='$_POST[keluhan]',
			Biaya_Adm='$_POST[biaya_adm]'
		WHERE No_Transaksi='$_POST[no_transaksi]'"
);

mysqli_close($con);

header('Location: list_berobat.php');
