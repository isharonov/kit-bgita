<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo $description; ?>">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<script src="https://kit.fontawesome.com/0abdafc5f5.js"></script>

	<title><?php echo $title; ?></title>

</head>
<body data-spy="scroll" data-target="#navigator" data-offset="0">
<header>

	<nav id="navigator" class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<span class="navbar-brand mb-0 h1"><img src="images/logo.gif" height="30" class="d-inline-block align-top" alt="Кафедра информационных технологий БГИТУ" title="Кафедра информационных технологий БГИТУ" /> <?php echo $h1; ?></span>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
				
			<div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">

				<ul id="timeMachine" class="nav nav-pills">
					<li class="nav-item"><a class="nav-link" href="#2012">2012</a></li>
					<li class="nav-item"><a class="nav-link" href="#2011">2011</a></li>
					<li class="nav-item"><a class="nav-link" href="#2010">2010</a></li>
					<li class="nav-item"><a class="nav-link" href="#2009">2009</a></li>
					<li class="nav-item"><a class="nav-link" href="#2008">2008 &mdash; 1972</a></li>
				</ul>

				<ul class="nav nav-pills">
					<li class="nav-item">
						<a class="nav-link" href="http://www.bgitu.ru/universitet/instituty/inzhenerno-ekonomicheskiy-institut/kafedra-informatsionnykh-tekhnologiy/" title="Информация о кафедре ИТ на официальном сайте БГИТУ"><i class="fas fa-info-circle fa-lg"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://vk.com/kit_bgita" title="Сообщество кафедры ИТ БГИТУ на vk.com"><i class="fab fa-vk fa-lg"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://github.com/isharonov/kit-bgita" title="Репозиторий сайта на Гитхабе"><i class="fab fa-github fa-lg"></i></a>
					</li>
				</ul>
			</div>

		</div>
	</nav>

</header>
<div class="container">
	
	<div class="row">
		<div class="col-1"></div>
		<div class="col-11">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="images/2009.png" alt="Выпуск 2009">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/2010.png" alt="Выпуск 2010">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/2011.png" alt="Выпуск 2011">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/2012.png" alt="Выпуск 2012">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>	
	</div>

	<div class="row">
		<div id="evelson" class="col-2">
			<div>
				<img src="images/evelson.png" class="img-fluid align-bottom" alt="Лев Игоревич Евельсон" />
			</div>
		</div>
	</div>

	<main>