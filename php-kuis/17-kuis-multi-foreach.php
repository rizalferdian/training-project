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
'budi' => 'baca buku'
],
'nilai' => [
'thoni' => 80,
'jarwo' => 90,
'budi' => 40
]
];

$arr2 = [];
$total = 0;
foreach ($arr['nilai'] as $key => $value) {
	$total += $value;
}


foreach ($arr as $key => $value) {
	foreach ($value as $key2 => $value2) {
		if ($key == "nilai") {
			$rumus = $value2 / $total;
			$arr2[$key2][$key] = sprintf('%0.2f', $rumus) ;
		} else {
			$arr2[$key2][$key] = $value2 ;
		}
	}
}

print_r($arr2);
?>