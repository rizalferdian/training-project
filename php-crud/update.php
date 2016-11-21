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
	<title>Update Data</title>
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
				<h3>Update Data Pegawai</h3>
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
							<input type="text" class="form-control" id="nama" placeholder="Enter Nama Pegawai" name='nama' value="<?= $data2['nama_pegawai']; ?>">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="telp">Telpon:</label>
						<div class="col-sm-10"> 
							<input type="text" class="form-control" id="telp" placeholder="Enter Telpon" name='telp' value="<?= $data2['telp']; ?>">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="id_posisi">Posisi:</label>
						<div class="col-sm-10"> 
							<select name="id_posisi" id="id_posisi" class="form-control" >
								<?php
								$sql = "select * from posisi";
								$result = mysql_query($sql);
								?>
								<option>
									Pilih Posisi
								</option>
								<?php
								while ($data = mysql_fetch_array($result)) {
									?>
									<option value="<?= $data['id']; ?> "
										<?php
										if($data2['nama_posisi'] == $data['nama'])
											echo "selected";
										?>
										>
										<?= $data['nama']; ?>
									</option>
									<?php
								}
								?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="id_kota">Kota:</label>
						<div class="col-sm-10"> 
							<select name="id_kota" id="id_kota" class="form-control">
								<?php
								$sql = "select * from kota";
								$result = mysql_query($sql);
								?>
								<option>
									Pilih Kota
								</option>
								<?php
								while ($data = mysql_fetch_array($result)) {
									?>
									<option value="<?= $data['id']; ?>"
										<?php
										if($data2['nama_kota'] == $data['nama'])
											echo "selected";
										?>
										>
										<?= $data['nama']; ?>
									</option>
									<?php
								}
								?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="telp">Jenis Kelamin:</label>
						<div class="col-sm-5"> 
							<div class="input-group">
								<span class="input-group-addon">
									<input type="radio" id="laki" name='id_kelamin' value="1"
									<?php 
									if($data2['nama_kelamin'] == 'Laki - laki') 
										echo "checked"; 
									?>
									>
								</span>
								<label for="laki" class="form-control">
									Laki laki
								</label>
							</div>
						</div>
						<div class="col-sm-5"> 
							<div class="input-group">
								<span class="input-group-addon">
									<input type="radio" name='id_kelamin' id='perempuan' value="2"
									<?php 
									if($data2['nama_kelamin'] == 'Perempuan') 
										echo "checked"; 
									?>
									>
								</span>
								<label for="perempuan" class="form-control">
									Perempuan
								</label>
							</div>
						</div>
					</div>

					<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success">Update Data</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
</body>
</html>