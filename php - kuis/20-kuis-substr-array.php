<?php
$input = 'ku';

$arr = [
'badak' => 1,
'singa' => 2,
'kuda' => 3,
'kucing' => 4,
'cacing' => 5,
'lalat' => 6,
];

function search($arr, $input)
{
	$arr2 = [];
	foreach ($arr as $key => $value) { // menggunakan array 1
		$jumlah_kata = strlen($input); //3
		$awal_kata = strpos($key, $input); //3
		$kata1 = substr($key, $awal_kata, $jumlah_kata); // badak 0, 3
		if ($kata1 == $input) {
			$arr2[$key] = $key . " - " . $value;
		}
	}
	print_r($arr2);
}

search($arr, $input);

?>