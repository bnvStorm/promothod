<?php include 'header.php' ?>


		<div class="content-wrapper content-wrapper--boxed oh">

		<?php 
			$cat = explode('/', $_SERVER['REQUEST_URI']);
			$cat = $cat[1];
		switch ($cat) {
			case 'otkhody':
				# code...
				break;
			case 'o-nas':
				# code...
				break;
			case 'uslugi':
				# code...
				break;
			case 'info':
				# code...
				break;
			case 'kontakty':
				# code...
				break;
			
			default:
				# code...
				break;
		}  ?>
		<h1><?php echo $h1; ?></h1>
		
		<?php echo $content; ?>
		
</div>
			<!-- Footer -->
<?php include 'footer.php' ?>