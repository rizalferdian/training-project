<?php
	$input = 'ku';

	$arr = [
		'badak',
		'singa',
		'kuda',
		'kucing',
		'cacing',
		'lalat'
	];

	
	
	function search($arr, $input)
	{
		$arr2 = [];
		$index = 0;
		foreach ($arr as $key => $value) {
			$jumlah_kata = strlen($input);
			$awal_kata = strpos($value, $input);
			$kata1 = substr($value, $awal_kata, $jumlah_kata);
			if ($kata1 == $input) {
				$arr2[$index] = $value;
				$index++;
			}
		}
		print_r($arr2);
	}

	search($arr, $input);

?>