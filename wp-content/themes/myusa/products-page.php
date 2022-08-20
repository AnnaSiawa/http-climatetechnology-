<?php

/**
 * Template Name: products
 */
?>

<?php get_header(); ?>

<div class="content">

	<?= Component::render('arrow'); ?>

	<div class="products-screen homepage-screen scroll-top">
		<div class="products-screen__row ">

			<div class="inner">
				<div class="title-block">
					<h2 class="container">Фильтр товаров</h2>
					<div></div>
				</div>

				<div class="title-block">
					<div class="product-filter container">
						<div class="product-filter__wrap">
							<div class="product-filter__row">
								<div class="product-filter__title">Бренды</div>
								<div class="product-filter__disc">
									<?= Component::render(
										'checkbox',
										[
											'label' => 'Hisense',
											'id' => 'Hisense',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'FUNAI',
											'id' => 'FUNAI',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'KENTATSU',
											'id' => 'KENTATSU',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'LG',
											'id' => 'LG',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'MITSUBISHI',
											'id' => 'MITSUBISHI',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'ROYAL CLIMA',
											'id' => 'ROYALCLIMA',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'ZANUSSI',
											'id' => 'ZANUSSI',
										]); ?>
								</div>
							</div>
							<div class="product-filter__row">
								<div class="product-filter__title">По типу</div>
								<div class="product-filter__disc">
									<?= Component::render(
										'checkbox',
										[
											'label' => 'Инверторные сплит-системы',
											'id' => 'invert',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'Неинверторные сплит-системы',
											'id' => 'not-invert',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'Разное',
											'id' => 'different',
										]); ?>
								</div>
							</div>
							<div class="product-filter__row">
								<div class="product-filter__title">Размещение внутреннего блока</div>
								<div class="product-filter__disc">
									<?= Component::render(
										'checkbox',
										[
											'label' => 'Настенный',
											'id' => 'wall',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'Потолочный',
											'id' => 'ceiling',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '',
											'id' => '',
										]); ?>
								</div>
							</div>
							<div class="product-filter__row">
								<div class="product-filter__title">Для помещений площадью:</div>
								<div class="product-filter__disc">
									<?= Component::render(
										'checkbox',
										[
											'label' => '1-20 кв.м',
											'id' => 'square1',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '20-25 кв.м',
											'id' => 'square20',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '25-30 кв.м',
											'id' => 'square25',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '30-40 кв.м',
											'id' => 'square30',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '40-50 кв.м',
											'id' => 'square40',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '50-60 кв.м',
											'id' => 'square50',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '60-70 кв.м',
											'id' => 'square60',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '70-80 кв.м',
											'id' => 'square70',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '80-90 кв.м',
											'id' => 'square80',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '90-100 кв.м',
											'id' => 'square90',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'более 100 кв.м',
											'id' => 'square100',
										]); ?>
								</div>
							</div>
						</div>

						<div class="product-filter__btn-container">
							<div class="product-filter__btn btn">
								<button id="reset-filter">Сбросить</button>
							</div>
							<div class="product-filter__btn btn">
								<button>Подобрать</button>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

	<div class="products-screen homepage-screen">
		<div class="products-screen__row ">

			<div class="inner">
				<div class="title-block scroll-top-catalog">
					<h2 class="container">Каталог товаров</h2>
				</div>

				<div class="title-block">
					<div class="product-slider">
						<div class="product">
							<div class="product-swiper__wrapper">
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">1 Кондиционер Lanzkraft
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
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner3.png">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">2 Кондиционер Lanzkraft
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
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">3 Кондиционер Lanzkraft
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
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">4 Кондиционер Lanzkraft
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
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">5 Кондиционер Lanzkraft
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
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">6 Кондиционер Lanzkraft
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
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">4 Кондиционер Lanzkraft
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
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">7 Кондиционер Lanzkraft
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
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">8 Кондиционер Lanzkraft
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
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">9 Кондиционер Lanzkraft
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
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">10 Кондиционер Lanzkraft
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
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">11 Кондиционер Lanzkraft
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
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">11 Кондиционер Lanzkraft
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
								<div class="product-swiper__slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">11 Кондиционер Lanzkraft
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
							<div class="pagination-wrap">
								<a data-goto=".scroll-top-catalog" class="pagination-btn-p"></a>
								<ul id="pagination" class="pagination"></ul>
								<a data-goto=".scroll-top-catalog" class="pagination-btn-n"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>
