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
		header('Location: home.php');
	} else {
		header('Location: login.php');
	}
} else {
	header('Location: login.php');
}


/*$sql = "select * from login";
$result = mysql_query($sql);

while ($data = mysql_fetch_array($result)) {
	echo $data["username"];
}*/
?>