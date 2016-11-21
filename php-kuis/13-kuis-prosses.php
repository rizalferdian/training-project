<?php
	echo "Rata-rata nilai keseluruhan : ";
	$total = 0;
	$value = $_POST['nilai'];
	for ($i=0; $i < 10; $i++) { 
		$total = $total + $value[$i];
	}
	echo ($total/10);
?>