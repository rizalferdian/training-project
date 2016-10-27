<?php
include_once('connection.php');

$id = $_GET['id'];
$sql = "delete from pegawai where id = {$id}";
mysql_query($sql);

header('Location: home.php');

?>