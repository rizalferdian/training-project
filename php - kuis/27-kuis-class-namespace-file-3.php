<?php
namespace fil3;

// include_once "namespace-2-file-1.php";
use fil1\socialMedia as socialMedia;

class facebook implements socialMedia{
	function __construct()
	{
		$this->like = 0;
	}

	function like()
	{
		$this->like++;
	}

	function getLike()
	{
		return $this->like;
	}
}

?>