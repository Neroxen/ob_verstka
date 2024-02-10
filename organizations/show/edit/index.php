<?php 

$sitebar = file_get_contents('top-sitebar.php');
$content = array(
	file_get_contents('content/setting.php'),
	file_get_contents('content/governance.php'),
	file_get_contents('content/blacklist.php'),
	file_get_contents('content/partnerships.php'),
	file_get_contents('content/honors.php'),
);

include '../../../main/main.php' ?>
