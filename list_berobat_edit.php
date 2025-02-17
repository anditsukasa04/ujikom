<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edit Data Berobat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

	<?php
	error_reporting(E_ALL ^ E_NOTICE);

	$con = mysqli_connect("localhost", "root", "", "ujikom1");

	$q = mysqli_query($con, "SELECT * FROM berobat WHERE No_Transaksi='$_GET[no_transaksi]'");
	while ($h = mysqli_fetch_array($q)) {
		$no_transaksi = $h['No_Transaksi'];
		$pasien_id = $h['Pasien_ID'];
		$tanggal = explode("-", $h['Tanggal_Berobat']);
		$dokter_id = $h['Dokter_ID'];
		$keluhan = $h['Keluhan'];
		$biaya_adm = $h['Biaya_Adm'];
	}

	if ($_GET["status"] == "clear") {
		$pasien_id = $dokter_id = $keluhan = $biaya_adm = "";
		$tanggal = [date("Y"), "", ""];
	}

	$option_pasien = "<option value='' style='display:none'>- Pilih Pasien -</option>";
	$q = mysqli_query($con, "SELECT * FROM pasien ORDER BY Nama_Pasien");
	while ($h = mysqli_fetch_array($q)) {
		$option_pasien = $option_pasien . "<option value=$h[Pasien_ID] " . ($pasien_id == $h['Pasien_ID'] ? 'selected' : '') . ">$h[Nama_Pasien]</option>";
	}

	$option_tanggal = "<option value='' style='display:none'>- Pilih Tanggal -</option>";
	for ($i = 1; $i <= 31; $i++) {
		$option_tanggal = $option_tanggal . "<option value=$i " . ($tanggal[2] == $i ? 'selected' : '') . ">$i</option>";
	}

	$bulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
	$option_bulan = "<option value='' style='display:none'>- Pilih Bulan -</option>";
	for ($i = 1; $i <= 12; $i++) {
		$option_bulan = $option_bulan . "<option value=$i " . ($tanggal[1] == $i ? 'selected' : '') . ">$bulan[$i]</option>";
	}

	$option_dokter = "<option value='' style='display:none'>- Pilih Dokter -</option>";
	$q = mysqli_query($con, "SELECT * FROM dokter ORDER BY Nama_Dokter");
	while ($h = mysqli_fetch_array($q)) {
		$option_dokter = $option_dokter . "<option value=$h[Dokter_ID] " . ($dokter_id == $h['Dokter_ID'] ? 'selected' : '') . ">$h[Nama_Dokter]</option>";
	}

	mysqli_close($con);
	?>

	<div class="container mt-3">
		<h2>EDIT DATA BEROBAT</h2><br>
		<a href='list_berobat.php?' class='btn btn-warning'>
			< Back</a><br><br>
				<form action="list_berobat_save_edit.php" method="post">
					<table>
						<tr>
							<td>No. Transaksi:</td>
							<td><input type="text" class="form-control" name="no_transaksi" value='<?php echo $no_transaksi ?>' readonly></td>
						</tr>
						<tr>
							<td>Nama Pasien:</td>
							<td><select class="form-select" name="pasien_id" value=<?php echo $pasien_id ?>><?php echo $option_pasien ?></select></td>
						</tr>
						<tr>
							<td>Tanggal Berobat:</td>
							<td>
								<table>
									<tr>
										<td><select class="form-select" name="tanggal"><?php echo $option_tanggal ?></select></td>
										<td><select class="form-select" name="bulan"><?php echo $option_bulan ?></select></td>
										<td><input type="number" class="form-control pull-left" name="tahun" value=<?php echo $tanggal[0] ?>></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>Nama Dokter:</td>
							<td><select class="form-select" name="dokter_id"><?php echo $option_dokter ?></select></td>
						</tr>
						<tr>
							<td>Keluhan:</td>
							<td><input type="text" class="form-control" name="keluhan" value='<?php echo $keluhan ?>'></td>
						</tr>
						<tr>
							<td>Biaya Administrasi:&nbsp;&nbsp;&nbsp;</td>
							<td><input type="number" class="form-control" name="biaya_adm" value='<?php echo $biaya_adm ?>'></td>
						</tr>
					</table>
					<br>
					<button type="submit" class='btn btn-success'>Submit</button>
					<a href='list_berobat_edit.php?status=clear&no_transaksi=<?php echo $no_transaksi ?>' class='btn btn-danger'>Clear</a>
				</form>
	</div>

</body>

</html>