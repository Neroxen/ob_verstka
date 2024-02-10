<?php 
$top = file_get_contents('top.php');
$nav = file_get_contents('nav.php');
$sitebar = file_get_contents('sitebar.php');
$content = array(
	file_get_contents('content/posts.php'),
	file_get_contents('content/information.php'),
	file_get_contents('content/stats.php'),
	file_get_contents('content/video.php'),
	file_get_contents('content/friends.php'),
);
$admonition = array(
	file_get_contents('admonition/steam.php'),
	file_get_contents('admonition/email.php'),
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
			<?php echo $sitebar; ?>
			<ul class="admonition">
			<?php
				foreach($admonition as $admonitionview)
					{ 
						echo $admonitionview;
				} 

			?>
			</ul>
			<?php echo $nav; ?>
			
	<div class="content-profile tab-content">
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
