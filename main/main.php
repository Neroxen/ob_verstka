<?php 
	require(dirname(dirname(__FILE__)).'/main/head.php');
?>
<body>	
	<?php include 'header.php' ?>
	<div class="container">
		<?php require(dirname(dirname(__FILE__)).'/main/sitebar_left.php'); ?>

		<section class="content">
			<?php require(dirname(dirname(__FILE__)).'/main/speedbar.php'); 
			echo $sitebar;
			?>
			
			<div class="left_content tab-content">
				<?php
				foreach($content as $contentview)
						{ 
						   echo $contentview;
						} 

				  ?>
			</div>
			
			<div class="clr"></div>
		</section> <!-- /content -->
		<?php require(dirname(dirname(__FILE__)).'/main/footer.php'); ?>
	</div>
</body>
</html>
