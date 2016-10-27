<?php
	$val1 = "Saya punya anjing 1 dan kucing 2";
	$val2 = substr($val1, 18, 1);
	$val3 = substr($val1, -1, 1);
	$val4 = $val2 + $val3;
	$val5 = substr($val1, 11, 13);
	$val6 = substr($val1, 24);
	echo ucfirst($val5);
	echo ucfirst($val6);
	echo " jumlahnya = " . $val4;
?>