<?php
	include_once('connection.php');
	$nama = $_GET['nama'];
	$posisi = $_GET['id_posisi'];
	$kelamin = $_GET['id_kelamin'];
	$kota = $_GET['id_kota'];
	$telp = $_GET['telp'];
	$sql = "insert into pegawai(nama,id_posisi,id_kelamin,id_kota,telp) values('$nama','$posisi','$kelamin','$kota','$telp')";
	$result = mysql_query($sql);
	header('Location: home.php');
?>