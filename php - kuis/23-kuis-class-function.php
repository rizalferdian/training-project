<?php


class atm{
	public $buku = [
			[
			'nama' => 'Belajar PHP',
			'stok' => 100,
			'harga' => 250000
			],
			[
			'nama' => 'Belajar HTML',
			'stok' => 100,
			'harga' => 75000
			],
			[
			'nama' => 'Seminggu belajar codeigniter',
			'stok' => 50,
			'harga' => 50000
			]
	];
	function __construct(){
		$this->saldo = 0;
	}

	function input(){
		$handle = fopen ("php://stdin","r");
		$line = fgets($handle);
		fclose($handle);
		return trim($line);
	}

	function restock($isi){
		foreach ($this->buku as $key => $value) {
			if(($key + 1) == $isi){
				$harga = $this->buku[$key]['harga'];
				$jumlah = $this->buku[$key]['stok'];
				$this->buku[$key]['stok'] = $jumlah -1;
				$this->debit($harga);
			}
		}
	}

	function print_array(){
		$number = 1;
		foreach ($this->buku as $key => $value) {
			echo $number . "\n";
			foreach ($value as $key2 => $value2) {
				echo $key2 . " : " . $value2;
				echo "\n";
			}
			sleep(1);
			$number++;
			echo "\n";
		}
	}

	function deposit($isi){
		$this->saldo = $isi;
	}

	function debit($isi){
		$this->saldo -= $isi;
	}

	function kredit($isi){
		$this->saldo += $isi;
	}

	function cekSaldo(){
		$saldo = $this->saldo; 
		echo "Saldo : " .  $saldo;
	}

	function run(){
		do{
			$this->print_array($this->buku);
			echo "Pilih buku yang dibeli : ";
			$input = $this->input();
			$this->restock($input);

			echo "\n";
			$this->cekSaldo();

			if($input != 'exit'){
				echo "\n"; 
				echo "Pembelian Berhasil!";
			} else {
				echo "\n"; 
				echo "Thank you, continuing...\n";
			}

			echo "\n";
			echo "---------------------------";
			echo "\n";
			sleep(5);
			for ($i = 0; $i < 50; $i++) echo "\r\n";

		} while ($input != 'exit');
}
}


$atm = new atm();

$atm->deposit(300000);
$atm->run();


?>