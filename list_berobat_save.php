<?php
error_reporting(E_ALL ^ E_NOTICE);

$con = mysqli_connect("localhost", "root", "", "ujikom1");

if ($_GET["status"] == "delete") {
	$q = mysqli_query($con, "DELETE FROM berobat WHERE No_Transaksi='$_GET[no_transaksi]'");
} elseif ($_POST["status"] == "new") {
	echo
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
				'$_POST[tahun_berobat]-$_POST[bulan_berobat]-$_POST[tanggal_berobat]',
				'$_POST[dokter_id]',
				'$_POST[keluhan]',
				'$_POST[biaya_adm]'
			)";

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
				'$_POST[tahun_berobat]-$_POST[bulan_berobat]-$_POST[tanggal_berobat]',
				'$_POST[dokter_id]',
				'$_POST[keluhan]',
				'$_POST[biaya_adm]'
			)"
	);
} elseif ($_POST["status"] == "edit") {
	$q = mysqli_query(
		$con,
		"UPDATE berobat SET 
				Pasien_ID='$_POST[pasien_id]',
				Tanggal_Berobat='$_POST[tahun_berobat]-$_POST[bulan_berobat]-$_POST[tanggal_berobat]',
				Dokter_ID='$_POST[dokter_id]',
				Keluhan='$_POST[keluhan]',
				Biaya_Adm='$_POST[biaya_adm]'
			WHERE No_Transaksi='$_POST[no_transaksi]'"
	);
}

mysqli_close($con);

//header('Location: list_berobat.php');
