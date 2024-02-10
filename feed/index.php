<?php 
$sitebar = file_get_contents('sitebar.php');
$content = array(
	file_get_contents('error.php'),
	file_get_contents('tourney.post.php'),
	file_get_contents('wall.post.php'),
	file_get_contents('match.post.php'),
	file_get_contents('show-more.php'),
)
 ;

include '../main/main.php' 
?>
