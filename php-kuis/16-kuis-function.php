<?php
	$arr = [
		'alamat' => [
		'budi' => 'kalimantan',
		'thoni' => 'malang',
		'jarwo' => 'surabaya'
		],
		'hobi' => [
		'thoni' => 'sepak bola',
		'jarwo' => 'nonton tv',
		'budi' => 'baca buku',
		]
	];

	$arr2 = [];
	function coba($arr)
	{
		foreach ($arr as $key => $value) {
			foreach ($value as $key2 => $value2) {
				$arr2[$key2][$key] = $value2 ;
			}
		}

		print_r($arr2);
	}

	coba($arr);
?>