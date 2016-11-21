<?php
	$arr1 = [
		'nama' => ['Thoni', 'Andik', 'Wawan'],
		'nilai' => [30, 28.5, 27],
		'kelas' => ['A', 'B', 'C'],
		'keterangan' => 'Semua siswa dinyatakan lolos'
	];

	echo "SMA NEGERI XXX Malang memiliki siswa sebagai berikut : \n \n";

	for ($i=0; $i < 3; $i++) { 
		echo ($i + 1) . ". " . $arr1['nama'][$i] . "\n";
	}

	echo "\n";

	echo "masing-masing mendapatkan nilai UN sebagai berikut : \n \n";


	for ($j=0; $j < 3; $j++) { 
		echo ($j + 1) . ". " . $arr1['nilai'][$j] . "\n";
	}

	echo "\n";

	echo "dengan demikian dapat disimpulkan bahwa ";

	echo $arr1['keterangan'];
?>