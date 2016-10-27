<?php 
include_once "connection.php"; 
include_once 'blog-proses.php'; 

use proses\run as proses; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home blog</title>
	<link rel="stylesheet" href="asset/styles.css">
</head>
<body>

	<nav>
		<ul>
			<li>
				<a href="blog.php">Home</a>
				<?php proses::folder( @$_GET ); ?>
			</li>
		</ul>
	</nav>

	<main>
		<section>
			<header>
				<h1>Hello World</h1>
				<p>Welcome to my blog</p>
			</header>