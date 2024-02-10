<?php 

$sitebar = file_get_contents('top-sitebar.php');
$content = array(
	file_get_contents('content.php'),
);

include '../../../main/main.php' ?>
