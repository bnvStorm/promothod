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
		

			<!-- Footer -->
			<footer class="footer bg-dark-overlay" style="background-image: url(/img/footer/1.jpg);">
				<div class="container-fluid">
					<div class="footer__widgets">
						<div class="row">

							<div class="col-lg-3 col-md-3">
								<div class="widget widget-about-us">
									<!-- Logo -->
									<a href="index.html" class="logo-container flex-child">
										<img class="logo" src="img/logo_white.png" srcset="/img/logo_white.png 1x, /img/logo_white@2x.png 2x" alt="logo">
									</a>
								</div>
							</div> <!-- end logo -->

							<div class="col-lg-2 col-md-3">
								<div class="widget widget_nav_menu">
									<ul>
										<li><a href="#">About</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-2 col-md-3">
								<div class="widget widget_nav_menu">
									<ul>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Terms &amp; Conditions</a></li>
										<li><a href="#">Career</a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-3 offset-lg-2 col-md-3">
								<div class="widget">
									<div class="socials">
										<a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
										<a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
										<a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
										<a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div> <!-- end container -->

				<div class="footer__bottom">
					<div class="container-fluid text-right text-md-center">
						<span class="copyright">
							&copy; 2018 Sedona, Made by <a href="https://deothemes.com">DeoThemes</a>
						</span>
					</div>
				</div> <!-- end footer bottom -->
			</footer> <!-- end footer -->

			<div id="back-to-top">
				<a href="#top"><i class="ui-arrow-up"></i></a>
			</div>

		</div> <!-- end content wrapper -->
	</main> <!-- end main wrapper -->


	<!-- jQuery Scripts -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/plugins.js"></script>
	<script src="/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="/js/rev-slider.js"></script>
	<script src="/js/scripts.js"></script>


	<!-- Rev Slider Offline Scripts -->
	<script src="/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

</body>
</html>