<?php

/**
 * Template Name: homepage
 */
?>

<?php get_header(); ?>

<div class="content">

	<div class="main-screen homepage-screen">
		<div class="main-screen__row container">
			<div class="inner">
				<div class="main-screen__row_block">
					<h1>«Технология климата»</h1>
					<div class="main-screen__disc">Продажа, монтаж и&nbsp;сервис климатического оборудования</div>
					<div class="main-screen__btn btn">
						<button>Выбрать кондиционер</button>
					</div>
				</div>
				<div class="main-screen__row_block"></div>
			</div>
		</div>
	</div>

	<div class="choose-screen homepage-screen">
		<div class="choose-screen__row ">
			<div class="inner">

				<div class="title-block container">
					<?= Component::render(
						'title-block',
						[
							'title' => 'Выбрать и купить<br> кондиционер в Брянске',
						]); ?>
				</div>

				<div class="title-block container">
					<div class="product-slider">
						<div class="product-swiper swiper">
							<!-- Оболочка -->
							<div class="product-swiper__wrapper swiper-wrapper">
								<!--Слайды -->
								<div class="product-swiper__slide swiper-slide">
									<!-- внутренний контент слайда -->
									<div class="product-swiper__item item">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">Кондиционер Lanzkraft
												LSWH-20FC1N/LSAH-20FC1N
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип: сплит-система</li>
														<li class="product-swiper__item">Размещение внутреннего блока:
															настенный
														</li>
														<li class="product-swiper__item">Площадь помещения:
															20&nbsp;кв.м
														</li>
														<li class="product-swiper__item">Тип фреона: R-410A</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Размеры</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Высота внутреннего
															блока/внешнего блока: 27&nbsp;см/45.8&nbsp;см
														</li>
														<li class="product-swiper__item">Ширина внутреннего
															блока/внешнего блока: 72&nbsp;см/63.5&nbsp;см
														</li>
														<li class="product-swiper__item">Глубина внутреннего
															блока/внешнего блока: 20.1&nbsp;см/24&nbsp;см
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button>Купить за 24 990 ₽</button>
											</div>
										</div>
									</div>
								</div>

								<div class="product-swiper__slide swiper-slide">
									<!-- внутренний контент слайда -->
									<div class="product-swiper__item item">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner3.png">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">Кондиционер Lanzkraft
												LSWH-20FC1N/LSAH-20FC1N
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип: сплит-система</li>
														<li class="product-swiper__item">Размещение внутреннего блока:
															настенный
														</li>
														<li class="product-swiper__item">Площадь помещения:
															20&nbsp;кв.м
														</li>
														<li class="product-swiper__item">Тип фреона: R-410A</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Размеры</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Высота внутреннего
															блока/внешнего блока: 27&nbsp;см/45.8&nbsp;см
														</li>
														<li class="product-swiper__item">Ширина внутреннего
															блока/внешнего блока: 72&nbsp;см/63.5&nbsp;см
														</li>
														<li class="product-swiper__item">Глубина внутреннего
															блока/внешнего блока: 20.1&nbsp;см/24&nbsp;см
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button>Купить за 24 990 ₽</button>
											</div>
										</div>
									</div>
								</div>

								<div class="product-swiper__slide swiper-slide">
									<!-- внутренний контент слайда -->
									<div class="product-swiper__item item">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">Кондиционер Lanzkraft
												LSWH-20FC1N/LSAH-20FC1N
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип: сплит-система</li>
														<li class="product-swiper__item">Размещение внутреннего блока:
															настенный
														</li>
														<li class="product-swiper__item">Площадь помещения:
															20&nbsp;кв.м
														</li>
														<li class="product-swiper__item">Тип фреона: R-410A</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Размеры</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Высота внутреннего
															блока/внешнего блока: 27&nbsp;см/45.8&nbsp;см
														</li>
														<li class="product-swiper__item">Ширина внутреннего
															блока/внешнего блока: 72&nbsp;см/63.5&nbsp;см
														</li>
														<li class="product-swiper__item">Глубина внутреннего
															блока/внешнего блока: 20.1&nbsp;см/24&nbsp;см
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button>Купить за 24 990 ₽</button>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="product-slider-nav container">
					<div class="swiper-prev">
						<img alt="swiper-prev-img"
							 src="<?php bloginfo('template_url'); ?>/dist/images/arrow.png">
					</div>
					<div class="swiper-pagination"></div>
					<div class="swiper-next">
						<img alt="swiper-next-img"
							 src="<?php bloginfo('template_url'); ?>/dist/images/arrow.png">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="install-screen homepage-screen">
		<div class="install-screen__row ">
			<div class="inner">

				<div class="title-block container">
					<?= Component::render(
						'title-block',
						[
							'title' => 'Установить кондиционер',
						]); ?>
				</div>

				<div class="install-screen__wrap">
					<div class="title-block container">
						<?= Component::render(
							'install',
							[
								'image' => '',
								'title' => 'Замеры',
								'disc' => 'Измерить помещение нужно для того, чтобы специалист определил, какой мощности кондиционер нужен в данное помещение.',
							]); ?>
					</div>
					<div class="title-block container">

					</div>
					<div class="title-block container">

					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>
