<?php 
$top = file_get_contents('top.php');
$sitebar = file_get_contents('sitebar.php');
$content = array(
	file_get_contents('content/main-info.php'),
	file_get_contents('content/info.php'),
	file_get_contents('content/privacy.php'),
	file_get_contents('content/stream.php'),
);

include '../main/head.php' 
?>
<body>	
	<?php include '../main/header.php' ?>
	<div class="container">
		<?php include '../main/sitebar_left.php' ?>

		<section class="content">
			<?php include '../main/speedbar.php';?>
			<?php echo $top; ?>
		<div class="setting-main tab-content">
		<?php
			foreach($content as $contentview)
				{ 
					echo $contentview;
				} 

		?>
	</div>
			
			
			<div class="clr"></div>
		</section> <!-- /content -->
		<?php include '../main/footer.php' ?>
	</div>
</body>
</html>
