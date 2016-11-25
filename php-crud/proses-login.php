<?php session_start(); ?>
<?php
include_once "connection.php";

$user = $_POST["username"];
$pass = md5($_POST["password"]);

$sql = "select * from login where username = '{$user}'";
$query = mysql_query($sql);

if(mysql_num_rows($query) == 1){
	$dataLogin = mysql_fetch_array($query);
	if($pass == $dataLogin['password']){
		$_SESSION['username'] = $user;
		echo 'true';
	} else {
		echo 'username atau password anda salah';
	}
} else {
	echo 'username atau password anda salah';
}
?>