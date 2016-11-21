<?php 
session_start();

if(!isset($_SESSION['username'])){
	header("Location: login.php");
}
?>

<?php include_once "connection.php"; ?>

<?php

$id = @$_GET['id'];

$sql = "
select 
pegawai.id as id,
pegawai.nama as nama_pegawai,
pegawai.telp,
kota.nama as nama_kota,
kelamin.nama as nama_kelamin,
posisi.nama as nama_posisi
from 
pegawai, posisi, kelamin, kota 
where 
pegawai.id = {$id} and
pegawai.id_posisi = posisi.id and
pegawai.id_kelamin = kelamin.id and
pegawai.id_kota = kota.id 
";

$result = mysql_query($sql);
$data2 = mysql_fetch_array($result);

?>

<?php include_once "connection.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Data</title>
	<link rel="stylesheet" href="asset/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>

	<div class="container">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">
				<a href="home.php" class="btn btn-info">Kembali</a>
				<a href="proses-logout.php" class="btn btn-danger left">Logout</a>
				<div class="both"></div>
			</div>
			<div class="panel-body">
				<h3>Detail Data Pegawai</h3>
			</div>

			<!-- Table -->
			<div class="panel-table">
				<form class="form-horizontal" action='proses-update.php' method="get">
					<input type="hidden" name="id" value="<?= $data2['id']; ?>">
					<div class="form-group">
						<label class="control-label col-sm-2" for="nama">
							Nama Pegawai:
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nama" value="<?= $data2['nama_pegawai']; ?>" readonly>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="telp">Telpon:</label>
						<div class="col-sm-10"> 
							<input type="text" class="form-control" id="telp" value="<?= $data2['telp']; ?>" readonly>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="id_posisi">Posisi:</label>
						<div class="col-sm-10"> 
							<input type="text" class="form-control" id="id_posisi" value="<?= $data2['nama_posisi']; ?>" readonly>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="id_kota">Kota:</label>
						<div class="col-sm-10"> 
							<input type="text" class="form-control" id="id_kota" value="<?= $data2['nama_kota']; ?>" readonly>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="id_kelamin">Jenis Kelamin:</label>
						<div class="col-sm-10"> 
							<input type="text" class="form-control" id="id_kelamin" value="<?= $data2['nama_kelamin']; ?>" readonly>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
</body>
</html>