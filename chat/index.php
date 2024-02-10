<?php 
$sitebar = file_get_contents('sitebar.php');
$content = array(
	file_get_contents('search-dialog.php'),
	file_get_contents('chat-header.php'),
	file_get_contents('chat-main.php'),
	file_get_contents('chat-add.php'),
)
 ;

include '../main/main.php' 
?>
