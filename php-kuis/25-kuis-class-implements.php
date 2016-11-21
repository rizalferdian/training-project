<?php
	interface socialMedia{
		function getLike();
	}

	class social
	{
		function compare(socialMedia $sm1, socialMedia $sm2)
		{
			if($sm1->getLike() > $sm2->getLike()){
				echo $sm1->nama . " Lebih besar dari " . $sm2->nama;
			} else {
				echo $sm1->nama . " Lebih kecil dari " . $sm2->nama;
			}
		}
	}

	class facebook implements socialMedia{
		function __construct()
		{
			$this->like = 0;
			$this->nama = "facebook";
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

	class twitter implements socialMedia
	{
		function __construct()
		{
			$this->favorit = 0;
			$this->nama = "twitter";
		}

		function favorit()
		{
			$this->favorit++;
		}

		function getLike()
		{
			return $this->favorit;
		}
	}

	$facebook = new facebook();
	$facebook->like();
	$facebook->like();

	$twitter = new twitter();
	$twitter->favorit();
	


	$social = new social();
	$social->compare($facebook, $twitter);
?>