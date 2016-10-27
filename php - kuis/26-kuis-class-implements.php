<?php
	interface club_bola{
		function yel();
	}

	class club {
		function yel(club_bola $club){
			echo $club->yel();
			echo "\n";
		}
	}

	class arema implements club_bola{
		function yel(){
			return "salam satu jiwa";		
		}
	}

	class persebaya implements club_bola{
		function yel(){
			return "bondo nekat";		
		}
	}

	class persija implements club_bola{
		function yel(){
			return "jakmania";		
		}
	}

	$arema = new arema();
	$persebaya = new persebaya();
	$persija = new persija();

	$club = new club();
	$club->yel($arema);
	$club->yel($persebaya);
	$club->yel($persija);
?>