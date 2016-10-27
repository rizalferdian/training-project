<?php 
include_once 'blog-header.php';
use proses\run as proses;

proses::show_artikel( @$_GET['c'] );

include_once 'blog-sidebar.php'; 
include_once 'blog-footer.php'; 
?>
