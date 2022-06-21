<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="preload" href="/wp-content/themes/myusa/dist/fonts/NHaasGroteskTXPro-65Md.woff2" as="font"
		  type="font/woff"
		  crossorigin="anonymous">
	<link rel="preload" href="/wp-content/themes/myusa/dist/fonts/SofiaProRegular.woff2" as="font" type="font/woff"
		  crossorigin="anonymous">
	<link rel="preload" href="https://yastatic.net/jquery/3.3.1/jquery.min.js" as="script"/>
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
	<header class="header">
		<div class="menu__burger">
			<div class="menu__icon icon-menu">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</header>
