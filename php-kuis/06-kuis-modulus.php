<?php
	for ($i=1; $i<= 10 ; $i++) {
		if ($i % 2 == 0) {
			echo $i . " - Genap";
			echo "\n";
		} else {
			echo $i . " - Ganjil";
			echo "\n";
			for ($j=1; $j <= 3; $j++) { 
				echo "Ganjil - " . $j;
				echo "\n";
			}
		}
	}
?>