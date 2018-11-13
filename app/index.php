<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>OptimizedHTML 4</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->

	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>
	<div class="container">
		<div class="example-bs">
			<div class="row">
				<h3>2.1. Колонки одинаковой ширины</h3>
			</div>
			<div class="row">
				<div class="col">1 из 2</div>
				<div class="col">2 из 2</div>
			</div>
			<div class="row">
				<div class="col">1 из 3</div>
				<div class="col">2 из 3</div>
				<div class="col">3 из 3</div>
			</div>
			<div class="row">
				<div class="col">1 из 8</div>
				<div class="col">2 из 8</div>
				<div class="col">3 из 8</div>
				<div class="col">4 из 8</div>
				<div class="col">5 из 8</div>
				<div class="col">6 из 8</div>
				<div class="col">7 из 8</div>
				<div class="col">8 из 8</div>
			</div>
			<div class="row">
				<div class="col">1 из 12</div>
				<div class="col">2 из 12</div>
				<div class="col">3 из 12</div>
				<div class="col">4 из 12</div>
				<div class="col">5 из 12</div>
				<div class="col">6 из 12</div>
				<div class="col">7 из 12</div>
				<div class="col">8 из 12</div>
				<div class="col">9 из 12</div>
				<div class="col">10 из 12</div>
				<div class="col">11 из 12</div>
				<div class="col">12 из 12</div>
			</div>
		</div>
		<div class="example-bs">
			<div class="row">
				<h3>2.2. Установка ширины одной колонки.</h3>
			</div>
			<div class="row">
				<div class="col">1 из 3</div>
				<div class="col-6">2 из 3 (широкая)</div>
				<div class="col">3 из 3</div>
			</div>
			<div class="row">
				<div class="col">1 из 3</div>
				<div class="col-4">2 из 3 (широкая)</div>
				<div class="col">3 из 3</div>
			</div>
		</div>
		<div class="example-bs">
			<div class="row">
				<h3>2.3. Контент переменной ширины.</h3>
			</div>
			<div class="row justify-content-sm-center">
				<div class="col col-md-2">1 from 3</div>
				<div class="col-sm-auto">Контент переменной ширины wefferfreferfe.</div>
				<div class="col col-md-2">3 from 3</div>
			</div>
			<div class="row">
				<div class="col">1 from 3</div>
				<div class="col-sm-auto">Контент переменной ширины wefferfreferfe.</div>
				<div class="col col-md-2">3 from 3</div>
			</div>
		</div>
		<div class="example-bs">
			<div class="row">
				<h3>2.3. Мульти-ряд.</h3>
			</div>
			<div class="row">
				<div class="col">col</div>
				<div class="col">col</div>
				<div class="w-100"></div>
				<div class="col">col</div>
				<div class="col">col</div>
			</div>
		</div>
		<div class="example-bs">
			<div class="row">
				<h3>3.1. Брэйкпоинты</h3>
			</div>
			<div class="row">
				<div class="col">col</div>
				<div class="col">col</div>
				<div class="col">col</div>
				<div class="col">col</div>
			</div>
			<div class="row">
				<div class="col-8">col-8</div>
				<div class="col-4">col-4</div>
			</div>
		</div>
		<div class="example-bs">
			<div class="row">
				<h3>3.2. На мобильных устройствах</h3>
			</div>
			<div class="row">
				<div class="col-sm-8">col-sm-8</div>
				<div class="col-sm-4">col-sm-4</div>
			</div>
			<div class="row">
				<div class="col-sm">col-sm</div>
				<div class="col-sm">col-sm</div>
				<div class="col-sm">col-sm</div>
			</div>

		</div>
		<div class="example-bs">
			<div class="row">
				<h3>3.3. Создание сложной комбинированной сетки</h3>
			</div>
			<div class="row">
				<div class="col-md-8">col-md-8</div>
				<div class="col-6 col-md-4">col-6 col-md-4</div>
			</div>
			<div class="row">
				<div class="col-6 col-md-4">col-6 col-md-4</div>
				<div class="col-6 col-md-4">col-6 col-md-4</div>
				<div class="col-6 col-md-4">col-6 col-md-4</div>
			</div>
			<div class="row">
				<div class="col-xsm-2 col-sm-6">col-sm-6</div>
				<div class="col-xsm-2 col-sm-6">col-sm-6</div>
			</div>
			

		</div>
		
	</div>






	<script src="js/scripts.min.js"></script>

</body>

</html>