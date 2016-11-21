<?php
$arr = [
'Piring' => 'Budi',
'Sendok' => 'Seno',
'Gelas' => 'Budi'
];


$arr2 = [];
function coba($arr)
{
	foreach ($arr as $key => $value) {
		$arr2[$value] = [];
	}

	foreach ($arr as $key => $value) {
		array_push($arr2[$value], $key);
	}
	print_r($arr2);
}

coba($arr);
?>