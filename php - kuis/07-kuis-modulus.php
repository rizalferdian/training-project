<?php
	for ($i=1; $i <= 10 ; $i++) { 
		if($i % 2 == 0 && $i % 3 == 0){
			echo $i . " - Ciyee Hore";
		} elseif ($i % 2 == 0) {
			echo $i . " - Hore";
		} elseif ($i % 3 == 0) {
			echo $i . " - Ciyee";
		} else {
			echo $i;
		}
		echo "\n";
	}
?>