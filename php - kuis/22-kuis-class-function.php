<?php
		class atm
		{
			function __construct()
			{
				$this->saldo = 0;
			}

			function deposit($isi){
				$saldo = $this->saldo; 
				$saldo = $isi;
				$this->saldo = $saldo;
			}

			function debit($isi){
				$saldo = $this->saldo; 
				$saldo = $saldo - $isi;
				$this->saldo = $saldo;
			}

			function kredit($isi){
				$saldo = $this->saldo; 
				$saldo = $saldo + $isi;
				$this->saldo = $saldo;
			}

			function cekSaldo(){
				$saldo = $this->saldo; 
				echo "Saldo anda ialah : " .  $saldo;
			}
		}

		$atm = new atm();
		$atm->deposit(100);
		$atm->debit(10);
		$atm->kredit(100);
		$atm->cekSaldo();
?>