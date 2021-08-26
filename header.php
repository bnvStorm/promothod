<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?php echo $title; ?></title>
	<script src="/js/lazy.js"></script>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="<?php echo $descr; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Barlow:400,600%7COpen+Sans:400,400i,700&display=swap' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<!-- Css -->
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/css/font-icons.css" />
	<link rel="stylesheet" href="/revolution/css/settings.css" />
	<link rel="stylesheet" href="/css/style.css" />

	<!-- Favicons -->
	<link rel="shortcut icon" href="/img/favicon.ico">
	<link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>

<body>

	<!-- Preloader -->
<!-- 	<div class="loader-mask">
		<div class="loader">
			"Загрузка..."
		</div>
	</div> -->

	<main class="main-wrapper">

		<!-- Navigation -->
		<header class="nav">
			<div class="nav__holder nav--sticky">
				<div class="container-fluid nav__container nav__container--side-padding">
					<div class="flex-parent">

						<div class="nav__header">
							<!-- Logo -->
							<a href="/" class="logo-container flex-child">
								<img class="logo" src="/img/logo.png" srcset="/img/logo.png 1x, /img/logo@2x.png 2x" alt="logo">
							</a>

							<!-- Mobile toggle -->
							<button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
								<span class="sr-only">КНПН</span>
								<span class="nav__icon-toggle-bar"></span>
								<span class="nav__icon-toggle-bar"></span>
								<span class="nav__icon-toggle-bar"></span>
							</button>
						</div>

						<!-- Navbar -->
						<nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse nav_top">
							<ul class="nav__menu">
								<li class="nav__dropdown">
									<a href="/" aria-haspopup="true">Главная</a>
									<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
									<!-- <ul class="nav__dropdown-menu">
										<li><a href="index.html">О нас</a></li>
										<li><a href="index-2.html">Home 2</a></li>
										<li><a href="index-3.html">Home 3</a></li>
										<li><a href="index-4.html">Home 4</a></li>
									</ul> -->
								</li>
								<li class="nav__dropdown">
									<a href="/o-nas/" aria-haspopup="true">О нас</a>
									<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
									<!-- <ul class="nav__dropdown-menu">
										<li><a href="index.html">О нас</a></li>
										<li><a href="index-2.html">Home 2</a></li>
										<li><a href="index-3.html">Home 3</a></li>
										<li><a href="index-4.html">Home 4</a></li>
									</ul> -->
								</li>
								<li class="nav__dropdown">
									<a href="/uslugi/" aria-haspopup="true">Услуги</a>
									<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
						<!-- 			<ul class="nav__dropdown-menu">
										<li><a href="about.html">About</a></li>
										<li><a href="services.html">Services</a></li>
										<li><a href="single-service.html">Single Service</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul> -->
								</li>
								<li class="nav__dropdown">
									<a href="/otkhody/" aria-haspopup="true">Отходы</a>
									<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
								<!-- 	<ul class="nav__dropdown-menu">
										<li><a href="portfolio.html">Portfolio</a></li>
										<li><a href="portfolio-gallery.html">Portfolio Gallery</a></li>
										<li><a href="portfolio-single.html">Portfolio Single</a></li>
									</ul> -->
								</li>
								<li class="nav__dropdown">
									<a href="/zakon/" aria-haspopup="true">Закон</a>
									<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
								<!-- 	<ul class="nav__dropdown-menu">
										<li><a href="icons.html">Icons</a></li>
										<li><a href="elements.html">Elements</a></li>
									</ul> -->
								</li>
								<li class="nav__dropdown">
									<a href="/kontakty/" aria-haspopup="true">Контакты</a>
									<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
								<!-- 	<ul class="nav__dropdown-menu">
										<li><a href="blog-masonry.html">Blog Masonry</a></li>
										<li><a href="blog.html">Blog Standard</a></li>
										<li><a href="single-post.html">Single Post</a></li>
									</ul> -->
								</li>
							</ul> <!-- end menu -->
							<div class="nav__phone nav__phone--mobile d-lg-none">
								<span class="nav__phone-text">Позвоните нам:</span>
								<a href="tel: 8 (7212) 41-00-29" class="nav__phone-number"> 8 (7212) 41-00-29</a>
							</div>

							<div class="nav__socials nav__socials--mobile d-lg-none">
								<div class="socials">
									<!-- <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a> -->
									<a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
									<!-- <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a> -->
									<a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
								</div>
							</div>
													
						</nav> <!-- end nav-wrap -->

						<div class="nav__phone nav--align-right d-none d-lg-block" style="display:none !important;">
						<!-- 	<span class="nav__phone-text">Позвоните нам:</span> -->
							<a href="tel:8 (7212) 41-00-29" class="nav__phone-number">8 (7212) 41-00-29</a>
						</div>

						<div class="nav__socials d-none d-lg-block">
							<div class="socials">
							<!-- 	<a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a> -->
							<!-- 	<a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a> -->
							<!-- 	<a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a> -->
								<!-- <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a> -->
							</div>
						</div>

					</div> <!-- end flex-parent -->
				</div> <!-- end container -->

			</div>
		</header> <!-- end navigation -->
<?php 
require 'config.php';
if ($dev_mode) {
	echo '<a target="_blank" href="/dev.php?func=save_to_file&page_id='.$id.'" class="btn btn--md btn--dark"><span>Сохранить в файл</span></a>';
	echo '<a target="_blank" href="/dev.php?func=save_to_db&page_id='.$id.'" class="btn btn--md btn--dark"><span>Сохранить в базу</span></a>';
	echo '<a target="_blank" href="/dev.php?func=view_from_cache&page_id='.$id.'" class="btn btn--md btn--dark"><span>Посмотреть из кеша</span></a>';
	echo '<a target="_blank" href="/dev.php?func=save_all_files_to_db" class="btn btn--md btn--dark"><span>Сохранить все страницы из файлов в бд</span></a>';
}
?>