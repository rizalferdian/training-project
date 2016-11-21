<?php
$arr = [
'buku 1',
'buku 2',
'buku 3',
'buku 4',
'buku 5',
];

for ($i=0; $i < count($arr); $i++) { 
	if($i != 0 && $i != 4){
		echo $arr[$i];
		echo "\n";
	}
}
?>
