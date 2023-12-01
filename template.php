<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title?></title>
	<script src="https://kit.fontawesome.com/47ae1cb85a.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="/style/style.css">
</head>
<body class="fw-normal">
	<header class="header">
		<nav class="navbar navbar-expand-lg bg-body-tertiary pb-3">
			<div class="container-fluid">
				<a class="navbar-brand text-center fw-bold d-flex me-4 align-items-center" href="/">
					<img src="/img/logo-image.png" alt="Логотип сайта" width="30" height="30" class="d-inline-block me-1">
					<h2 class="mb-0 header__title">
						Bookcha
					</h2>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="/#about-company">O нас</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contacts#delivery">Доставка</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contacts">Контакты</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="addArticle">Добавление статьи (тест)</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Каталог
							</a>
							<ul class="dropdown-menu">
								<li class="fw-semibold">
									<hr class="dropdown-divider book-divider mt-0">Книжный магазин
								</li>
								<li>
									<a class="dropdown-item" href="#books-rating">Рейтинги книг</a>
								</li>
								<li>
									<a class="dropdown-item" href="#new-books">Новинки</a>
								</li>
								<li>
									<a class="dropdown-item" href="books">В магазин</a>
								</li>
								<li class="fw-semibold">
									<hr class="dropdown-divider coworking-divider">Коворкинг
								</li>
								<li>
									<a class="dropdown-item" href="coworking">Что это такое?</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
						<button class="btn btn-outline-success btn__search" type="submit">Поиск</button>
					</form>
				</div>

				<?if(empty($_SESSION['id'])):?>
					<a href="/reg" class="me-3 btn btn-success"><i class="fa-solid fa-user-plus"></i>Регистрация</a>
					<a href="/login" class="btn btn-success"><i class="fa-solid fa-right-to-bracket"></i>Вход</a>
				<? else: ?>
					<a href="/profile" class="me-3 btn btn-success"></i>Профиль</a>
					<a href="/logout" class="btn btn-success"></i>Выход</a>
				<?endif;?>

			</div>
		</nav>
	</header>

		<?= $content?>

		<footer class="footer">
			<div class="container">
				<div class="row d-flex justify-content-between py-4">
					<div class="col-sm-3">
						<a class="navbar-brand text-center fw-bold d-flex me-4 align-items-center mb-3" href="/">
							<img src="/img/logo-image.png" alt="Логотип сайта" width="30" height="30" class="d-inline-block me-1">
							<h2 class="mb-0">
								Bookcha
							</h2>
						</a>
						<p>
							Книги для души и&nbsp;головы, а&nbsp;так&nbsp;же уютное пространство для работы в&nbsp;одном месте
						<p class="text-secondary">
							&copy;&nbsp;2023&ndash;2024 Книжный магазин и&nbsp;зона для коворкинга &laquo;Bookcha&raquo;
						</p>
					</div>
					<div class="col-sm-1 mx-auto">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#about-company">О нас</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contacts.html">Контакты</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contacts.html#delivery">Доставка</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="books.html">Магазин</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="coworking.html">Коворкинг</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-3 d-flex flex-column">
						<a href="tel:+74953225448" class="nav-link">+7&nbsp;495 322-54-48</a>
						<a href="mailto:ketnut3336@gmail.com" class="nav-link pb-2">ketnut3336@gmail.com</a>
						<div class="container-sm p-0 order-3">
							<a href="#" class="footer__icon pe-2"><i class="fa-brands fa-vk fa-2x"></i></a>
							<a href="#" class="footer__icon pe-2"><i class="fa-brands fa-square-odnoklassniki fa-2x"></i></a>
							<a href="#" class="footer__icon pe-2"><i class="fa-brands fa-linkedin fa-2x"></i></a>
							<a href="#" class="footer__icon pe-2"><i class="fa-brands fa-square-facebook fa-2x"></i></a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	</body>
	</html>