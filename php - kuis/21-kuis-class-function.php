<?php
	class kendaraan
	{
		function __construct()
		{
			$this->bensin = 10;
			echo "Bensin awal = " . $this->bensin;
			echo "\n";
		}

		function isiBensin()
		{
			$bensin = $this->bensin;
			$bensin = $bensin + 2;
			echo "Bensin diisi menjadi " . $bensin;
			echo "\n";
			$this->bensin = $bensin;
		}

		function jalan()
		{
			$bensin = $this->bensin;
			$bensin = $bensin - 1;
			echo "Bensin tinggal " . $bensin;
			echo "\n";
			$this->bensin = $bensin;
		}

	}

	$mobil = new kendaraan();
	$mobil->jalan();
	$mobil->jalan();
	$mobil->jalan();
	$mobil->isiBensin();
?>