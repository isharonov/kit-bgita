<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo $description; ?>">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<title><?php echo $title; ?></title>

</head>
<body data-spy="scroll" data-target="#navigator" data-offset="0">
<header>

	<nav id="navigator" class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<span class="navbar-brand mb-0 h1">
				<img src="images/logo.svg" height="30" width="101" class="d-inline-block align-top" alt="Кафедра информационных технологий БГИТУ" title="Кафедра информационных технологий БГИТУ" />
				 <?php echo $h1; ?>
			</span>

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
						<a class="nav-link logo-svg" href="http://www.bgitu.ru/universitet/instituty/inzhenerno-ekonomicheskiy-institut/kafedra-informatsionnykh-tekhnologiy/" title="Информация о кафедре ИТ на официальном сайте БГИТУ">
						<svg role="img" width="21" height="21" xmlns="http://www.w3.org/2000/svg"   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><title>Info icon</title><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="8"></line></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link logo-svg" href="https://vk.com/kit_bgita" title="Сообщество кафедры ИТ БГИТУ на vk.com">
						<svg role="img" width="21" height="21" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>VK icon</title><path fill="currentColor" d="M11.701 18.771h1.437s.433-.047.654-.284c.21-.221.21-.63.21-.63s-.031-1.927.869-2.21c.887-.281 2.012 1.86 3.211 2.683.916.629 1.605.494 1.605.494l3.211-.044s1.682-.105.887-1.426c-.061-.105-.451-.975-2.371-2.76-2.012-1.861-1.742-1.561.676-4.787 1.469-1.965 2.07-3.166 1.875-3.676-.166-.48-1.26-.361-1.26-.361l-3.602.031s-.27-.031-.465.09c-.195.119-.314.391-.314.391s-.572 1.529-1.336 2.82c-1.623 2.729-2.268 2.879-2.523 2.699-.604-.391-.449-1.58-.449-2.432 0-2.641.404-3.75-.781-4.035-.39-.091-.681-.15-1.685-.166-1.29-.014-2.378.01-2.995.311-.405.203-.72.652-.539.675.24.03.779.146 1.064.537.375.506.359 1.636.359 1.636s.211 3.116-.494 3.503c-.495.262-1.155-.28-2.595-2.756-.735-1.26-1.291-2.67-1.291-2.67s-.105-.256-.299-.406c-.227-.165-.557-.225-.557-.225l-3.435.03s-.51.016-.689.24c-.166.195-.016.615-.016.615s2.686 6.287 5.732 9.453c2.79 2.902 5.956 2.715 5.956 2.715l-.05-.055z"/></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link logo-svg" href="https://github.com/isharonov/kit-bgita" title="Репозиторий сайта на Гитхабе">
						<svg role="img" width="21" height="21" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub icon</title><path fill="currentColor" d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
						</a>
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
						<img class="d-block w-100" loading="lazy" src="images/2010.png" alt="Выпуск 2010">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" loading="lazy" src="images/2011.png" alt="Выпуск 2011">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" loading="lazy" src="images/2012.png" alt="Выпуск 2012">
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
				<img src="images/evelson_main.png" class="img-fluid align-bottom" alt="Лев Игоревич Евельсон" />
			</div>
		</div>
	</div>

	<main>