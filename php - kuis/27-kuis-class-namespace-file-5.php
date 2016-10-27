<?php
include "27-kuis-class-namespace-file-1.php";
include "27-kuis-class-namespace-file-2.php";
include "27-kuis-class-namespace-file-3.php";
include "27-kuis-class-namespace-file-4.php";


use fil2\social as social;
use fil3\facebook as facebook;
use fil4\twitter as twitter;

$facebook = new facebook();
$facebook->like();
$facebook->like();

$twitter = new twitter();
$twitter->favorit();



$social = new social();
$social->compare($facebook, $twitter);
?>