<?php
	function tambah($nilai1, $nilai2)
	{
		return $nilai2 + $nilai1;
	}

	function bagi($hasil_tambah)
	{
		return $hasil_tambah / 2;
	}

	function kali($hasil_bagi)
	{
		return $hasil_bagi * 2;
	}

	function tampil($hasil_kali)
	{
		echo $hasil_kali;
	}

	$tambah = tambah(10, 10);
	$bagi = bagi($tambah);
	$kali = kali($bagi);
	tampil($kali);
?>