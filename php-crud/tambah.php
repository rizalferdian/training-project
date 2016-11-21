<?php 
session_start();

if(!isset($_SESSION['username'])){
	header("Location: login.php");
}
?>

<?php include_once "connection.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
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
				<h3>Tabel Data Pegawai</h3>
			</div>

			<!-- Table -->
			<div class="panel-table">
				<form class="form-horizontal" action='proses-tambah.php' method="get">
					<div class="form-group">
						<label class="control-label col-sm-2" for="nama">
							Nama Pegawai:
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nama" placeholder="Enter Nama Pegawai" name='nama'>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="telp">Telpon:</label>
						<div class="col-sm-10"> 
							<input type="text" class="form-control" id="telp" placeholder="Enter Telpon" name='telp'>
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
									<option value=" <?= $data['id']; ?> ">
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
									<option value="<?php echo $data['id'] ?>"><?php echo $data['nama'] ?></option>
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
									<input type="radio" id="laki" name='id_kelamin' value="1">
								</span>
								<label for="laki" class="form-control">
									Laki laki
								</label>
							</div>
						</div>
						<div class="col-sm-5"> 
							<div class="input-group">
								<span class="input-group-addon">
									<input type="radio" name='id_kelamin' id='perempuan' value="2">
								</span>
								<label for="perempuan" class="form-control">
									Perempuan
								</label>
							</div>
						</div>
					</div>

					<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success">Tambah</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
</body>
</html>

