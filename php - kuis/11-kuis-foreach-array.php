<?php
	$arr1 = [
		'nama' => ['Thoni', 'Andik', 'Wawan'],
		'nilai' => [30, 28.5, 27],
		'kelas' => ['A', 'B', 'C'],
		'keterangan' => 'Semua siswa dinyatakan lolos'
	];

	// echo "Hasil Ujian SMA NEGERI XXX Malang adalah berikut sebagai berikut : \n \n";

	// for ($i=0; $i < 3; $i++) { 
	// 	echo ($i + 1) . ". Nama  : " . $arr1['nama'][$i] . "\n";
	// 	echo "   Kelas : " . $arr1['kelas'][$i] . "\n";
	// 	echo "   Nilai : " . $arr1['nilai'][$i] . "\n";
	// }

	// echo "\n";

	// echo "dengan demikian dapat disimpulkan bahwa ";

	// echo $arr1['keterangan'];

	$nomer = 1;
	for ($i=0; $i < 3 ; $i++) { 
		echo $nomer . ". ";
			foreach ($arr1 as $key => $value) {
				if($key != "keterangan"){
					if ($key != "nama") {
						echo "   ";
					}
					echo $key . " : " . $arr1[$key][$i];
					echo "\n";	
				}
			}
			$nomer++;
		}



?>