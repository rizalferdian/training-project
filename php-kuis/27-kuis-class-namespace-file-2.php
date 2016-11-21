<?php
namespace fil2;

// include_once "namespace-2-file-1.php";
use fil1\socialMedia as socialMedia;

class social
	{
		function compare(socialMedia $sm1, socialMedia $sm2)
		{
			if($sm1->getLike() > $sm2->getLike()){
				echo "Lebih besar";
			} else {
				echo "Lebih kecil";
			}
		}
	}

?>