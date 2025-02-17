<?php
error_reporting(E_ALL ^ E_NOTICE);

$con = mysqli_connect("localhost", "root", "", "ujikom1");

$q = mysqli_query(
	$con,
	"INSERt INTO berobat(
			No_Transaksi,
			Pasien_ID,
			Tanggal_Berobat,
			Dokter_ID,
			Keluhan,
			Biaya_Adm
		) 
		VALUES (
			'$_POST[no_transaksi]',
			'$_POST[pasien_id]',
			'$_POST[tahun]-$_POST[bulan]-$_POST[tanggal]',
			'$_POST[dokter_id]',
			'$_POST[keluhan]',
			'$_POST[biaya_adm]'
		)"
);

mysqli_close($con);

header('Location: list_berobat.php');
