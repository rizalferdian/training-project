<?php 
session_start();

if(!isset($_SESSION['username'])){
	header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="asset/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>

	<div class="container">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">
				<a href="tambah.php" class="btn btn-success">Tambah Data</a>
				<input type="text" name="q" class="form-control" id="search" placeholder="Search">
				<a href="proses-logout.php" class="btn btn-danger left">Logout</a>
				<div class="both"></div>
			</div>
			<div class="panel-body">
				<h3>Tabel Data Pegawai</h3>
			</div>

			<!-- Table -->
			<div class="panel-table">
				<table class="table table-bordered table-hover">
				</table>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="asset\jquery.js"></script>
	<script type="text/javascript" src="asset\script.js"></script>

</body>
</html>
