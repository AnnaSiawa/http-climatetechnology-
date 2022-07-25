<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

<!--	<link rel="preload" href="https://yastatic.net/jquery/3.3.1/jquery.min.js" as="script"/>-->
	<link rel="preload" href="/wp-content/themes/myusa/dist/index.css" as="style"/>
	<link rel="preload" href="/wp-content/themes/myusa/dist/index.js" as="script"/>
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="theme-color" content="#ffffff">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
	<!--ограничение по высоте и фон-->
	<header class="header">
		<!--ограничение по ширине-->
		<div class="header__row container">
			<!--внутренний контейнер-->
			<div class="inner">
				<div class="menu__burger">
					<div class="menu__icon icon-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>

				<div class="mobile-menu-cell">
					<a href="tel:+74832300126">Брянск, тел. 30-01-26</a>
				</div>

				<nav class="mobile-menu">
					<a href="/" class="mobile-menu__title">«Технология климата»</a>
					<ul class="mobile-menu__list">
						<li><a href="#" class="nav-item">Каталог</a></li>
						<li><a href="/measure" class="nav-item">Замеры</a></li>
						<li><a href="/mounting" class="nav-item">Монтаж</a></li>
						<li><a href="/service" class="nav-item">Обслуживание</a></li>
						<li><a href="#" class="nav-item">Наши фото</a></li>
						<li><a href="#" class="nav-item">Контакты</a></li>
					</ul>
				</nav>

				<nav class="desktop-menu">
					<a href="/" class="desktop-menu__title">«Технология климата»</a>
					<ul class="desktop-menu__list">
						<li class="item-services">
							<a href="#" class="nav-item">Услуги</a>
							<div class="submenu">
								<ul class="submenu__list">
									<li><a href="/measure">Замеры</a></li>
									<li><a href="/mounting">Монтаж</a></li>
									<li><a href="/service">Обслуживание</a></li>
								</ul>
							</div>
						</li>
						<li><a href="#" class="nav-item">Каталог</a></li>
						<li><a href="#" class="nav-item">Контакты</a></li>
					</ul>
					<a href="tel:+74832300126" class="desktop-menu__cell">Брянск, тел. 30-01-26</a>
				</nav>

			</div>
		</div>
	</header>



