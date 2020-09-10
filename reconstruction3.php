<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
	<title>Сайт на реконструкции</title>
</head>
<body>
	<style>
		body{
			padding: 0;
			margin: 0;
		}
		main{
			height: 88vh;
/*			background: url('img/new/rbg.jpg');
			background-size: cover;
			filter: blur(10px);*/
			display: flex;
			align-items: center;
			justify-content: center;
		}
		main:before{
			content: '';
			position: fixed; /* Фиксируем на одном месте */
			left: 0; right: 0; /* Вся ширин */
			top: 0; bottom: 0; /* Вся высота */
			z-index: -1; /* Фон ниже текста */
			/* Параметры фона */
			background: url('img/new/rbg3.jpg') center / cover no-repeat;
			filter: blur(5px); /* Размытие */
		}
		footer{
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 20px;
			padding-right: 20px;
			display: flex;
			justify-content: flex-end;
			align-items: center;
			line-height: 25px;
			height: 10vh;
			background: gray;
			color:#fff;
			font-family: "Roboto", sans-serif;
			font-size: 14px;
			text-align: right;
		}
		.logo{
			display: flex;
			justify-content: center;
			align-items: center;
			background: #fff;
			padding: 20px;
		}
		.logo-txt{
			font-size: 50px;
			font-weight: bold;
			font-family: "Roboto", sans-serif;
		}
	</style>
	<main>
		<div class="logo">
			<div class="logo-img">
				<img src="img/new/partners/7.jpg" alt="">
			</div>
			<div class="logo-txt">
				Сайт на реконструкции
			</div>
		</div>
	</main>
	<!-- Footer -->
	<footer class="footer bg-dark-overlay">

		2012-2020 <br>
		&copy; Медиа-центр компании
		
	</footer> <!-- end footer -->
</body>
</html>