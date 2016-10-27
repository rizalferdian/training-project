<!-- <?php
	include_once('connection.php');
	$id = $_GET['id'];
	$nama = $_GET['nama'];
	$posisi = $_GET['id_posisi'];
	$kelamin = $_GET['id_kelamin'];
	$kota = $_GET['id_kota'];
	$telp = $_GET['telp'];
	$sql = "
	update pegawai
	set
	nama = '$nama',
	telp = '$telp',
	id_kota = '$kota',
	id_kelamin = $kelamin,
	id_posisi = $posisi
	where
	id = $id
	";
	$result = mysql_query($sql);
	header('Location: home.php');
?> -->