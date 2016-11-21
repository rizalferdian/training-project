<?php

echo "\n";
$val = "Umur saya 24 tahun";
$val2 = substr($val, 10, 2);
if ($val2 % 2 == 0) {
	echo $val2 . " adalah Genap";
} else {
	echo $val2 . " adalah Ganjil";
}
?>