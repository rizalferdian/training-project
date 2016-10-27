<?php
	$arr = [
		'a' => [
			'child' => [],
		],
		'b' => [
			'child' => [],
		]
	];

	foreach ($arr as $key => $value) {
		foreach ($value as $key2 => $value2) {
			if (!$value2) {
				$arr[$key][$key2][$key][$key2] = [];
			}
		}
	}

	print_r($arr);

?>