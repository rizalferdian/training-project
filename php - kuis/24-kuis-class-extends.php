<?php
class pegawai {
	function __construct(){
		$this->gaji = 1500000;
	}
}

class dosen extends pegawai{
	function gaji($sks){
		$total = $sks * 15000;
		$this->gaji = $this->gaji + $total;
	}

	function tampil_gaji(){
		return $this->gaji;
	}
}

class staff extends pegawai{
	function gaji($kehadiran){
		$total = $kehadiran * 5000;
		$this->gaji = $this->gaji + $total;
	}

	function tampil_gaji(){
		return $this->gaji;
	}
}

$dosen = new dosen();
$dosen->gaji(1);

$staff = new staff();
$staff->gaji(1);

echo "Dosen : " . $dosen->tampil_gaji();
echo "\n";
echo "staff : " . $staff->tampil_gaji();

?>