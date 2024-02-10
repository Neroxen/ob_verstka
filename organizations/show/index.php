<?php 

$sitebar = file_get_contents('top-sitebar.php');
$content = array(
	file_get_contents('notices/notices.php'),
	file_get_contents('content/info.php'),
	file_get_contents('content/divisions.php'),
	file_get_contents('content/matches.php'),
	file_get_contents('content/tourneys.php'),
	file_get_contents('content/discussion.php'),
);

include '../../main/main.php' ?>
