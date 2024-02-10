<?php 

$sitebar = file_get_contents('top-sitebar.php');
$content = array(
	file_get_contents('content/info.php'),
	file_get_contents('content/rules.php'),
	file_get_contents('content/bracket.php'),
	file_get_contents('content/players.php'),
	file_get_contents('content/matches.php'),
	file_get_contents('content/prize.php'),
);

include '../../main/main.php' ?>
