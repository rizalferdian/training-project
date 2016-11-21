<?php
$val = "Umur saya 24.5 tahun";
$nilai = substr($val, 10, 5);
$nilai = $nilai * 3;
$nilai = pow($nilai, 2);
$nilai = ceil($nilai);
echo $nilai;
?>