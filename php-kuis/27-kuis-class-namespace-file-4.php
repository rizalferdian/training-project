<?php
namespace fil4;

// include_once "namespace-2-file-1.php";
use fil1\socialMedia as socialMedia;

class twitter implements socialMedia
{
	function __construct()
	{
		$this->favorit = 0;
	}

	function favorit()
	{
		$this->favorit++;
	}

	function getFavorit()
	{
		return $this->favorit;
	}

	function getLike()
	{
		return $this->favorit;
	}
}

?>