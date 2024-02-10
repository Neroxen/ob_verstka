<?php 
$sitebar = file_get_contents('sitebar.php');
$content = array(
	file_get_contents('content.php'),
	file_get_contents('show-more.php'),
)
 ;

include '../main/main.php' 
?>
