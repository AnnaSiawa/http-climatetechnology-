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
					<h2 class="container title-filter">
						<span class="scroll-title">Фильтр товаров</span>
						<span class="filter-arrow">
								<img alt="filter-arrow-img"
									 src="<?php bloginfo('template_url'); ?>/dist/images/filter-arrow.png">
							</span>
					</h2>
				</div>

				<div class="title-block title-block_filter">
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
											'label' => 'MIDEA',
											'id' => 'MIDEA',
										]); ?>
								</div>
							</div>
							<div class="product-filter__row">
								<div class="product-filter__title">По типу компрессора</div>
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
								</div>
							</div>
							<div class="product-filter__row">
								<div class="product-filter__title">По типу размещения</div>
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
											'label' => 'Напольно-потолочный',
											'id' => 'Floor-ceiling',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'Колонный',
											'id' => 'columned',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'Кассетный',
											'id' => 'Cassette',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'Канальный',
											'id' => 'ducted',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'Тепловые насосы',
											'id' => 'heat-pumps',
										]); ?>
								</div>
							</div>
							<div class="product-filter__row">
								<div class="product-filter__title">Для помещений площадью:</div>
								<div class="product-filter__disc">
									<?= Component::render(
										'checkbox',
										[
											'label' => 'до 20 кв.м',
											'id' => 'square1',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '21-30 кв.м',
											'id' => 'square2',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '31-54 кв.м',
											'id' => 'square3',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '55-79 кв.м',
											'id' => 'square4',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => '80-120 кв.м',
											'id' => 'square5',
										]); ?>
									<?= Component::render(
										'checkbox',
										[
											'label' => 'более 120 кв.м',
											'id' => 'square6',
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
					<h2 class="container">
						<span class="scroll-title">Каталог товаров</span>
						<span>
							<svg id="Layer_1" style="enable-background:new 0 0 128 128;"
								 version="1.1" viewBox="0 0 128 128" xml:space="preserve"
								 xmlns="http://www.w3.org/2000/svg"
								 xmlns:xlink="http://www.w3.org/1999/xlink" width="128"
								 height="128"><style type="text/css">
	.st0 {
		opacity: 0.2;
		fill: #FFFFFF;
	}

	.st1 {
		fill: #FFFFFF;
	}

	.st2 {
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st3 {
		fill: #5E61A3;
	}

	.st4 {
		opacity: 0.5;
		fill: #242C88;
	}

	.st5 {
		fill: #39C89A;
	}

	.st6 {
		fill: #CAEAFB;
	}

	.st7 {
		fill: #589FFF;
	}

	.st8 {
		fill: #FF5751;
	}

	.st9 {
		fill: #BC8D66;
	}

	.st10 {
		opacity: 0.7;
		fill: #FFFFFF;
	}

	.st11 {
		fill: #F1C92A;
	}

	.st12 {
		opacity: 0.4;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st13 {
		fill: #F3877E;
	}

	.st14 {
		fill: #83D689;
	}

	.st15 {
		opacity: 0.4;
		fill: #242C88;
	}

	.st16 {
		opacity: 0.2;
		fill: #242C88;
	}

	.st17 {
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
		stroke-dasharray: 0.1, 6;
	}

	.st18 {
		fill: #FFC408;
	}

	.st19 {
		opacity: 0.4;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
		stroke-dasharray: 0.1, 6;
	}

	.st20 {
		fill: none;
		stroke: #CAEAFB;
		stroke-width: 12;
		stroke-linecap: round;
		stroke-miterlimit: 10;
	}

	.st21 {
		fill: none;
		stroke: #CAEAFB;
		stroke-width: 7;
		stroke-linecap: round;
		stroke-miterlimit: 10;
	}

	.st22 {
		opacity: 0.4;
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st23 {
		opacity: 0.5;
	}

	.st24 {
		fill: #242C88;
	}

	.st25 {
		fill: none;
		stroke: #242C88;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
		stroke-dasharray: 0.1, 6;
	}

	.st26 {
		opacity: 0.5;
		fill: #FFFFFF;
	}

	.st27 {
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st28 {
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st29 {
		fill: #E5BD9E;
	}

	.st30 {
		fill: #A06D47;
	}

	.st31 {
		opacity: 0.3;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
		stroke-dasharray: 0.1, 6;
	}

	.st32 {
		opacity: 0.1;
		fill: #242C88;
	}

	.st33 {
		opacity: 0.5;
		fill: #FF5751;
	}

	.st34 {
		opacity: 0.2;
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st35 {
		opacity: 0.3;
		clip-path: url(#SVGID_2_);
	}

	.st36 {
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
		stroke-dasharray: 0, 6;
	}

	.st37 {
		opacity: 0.3;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
		stroke-dasharray: 0, 6;
	}

	.st38 {
		clip-path: url(#SVGID_4_);
	}

	.st39 {
		opacity: 0.2;
		fill: none;
		stroke: #242C88;
		stroke-width: 9;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st40 {
		opacity: 0.3;
	}

	.st41 {
		opacity: 0.4;
		fill: #FFFFFF;
	}

	.st42 {
		opacity: 0.5;
		fill: #CAEAFB;
	}

	.st43 {
		opacity: 0.6;
		fill: #242C88;
	}

	.st44 {
		opacity: 0.5;
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st45 {
		opacity: 0.3;
		fill: #242C88;
	}

	.st46 {
		opacity: 0.2;
	}

	.st47 {
		clip-path: url(#SVGID_6_);
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st48 {
		opacity: 0.2;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 8;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st49 {
		clip-path: url(#SVGID_8_);
		fill: #FFFFFF;
	}

	.st50 {
		clip-path: url(#SVGID_8_);
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st51 {
		opacity: 0.2;
		clip-path: url(#SVGID_8_);
		fill: #242C88;
	}

	.st52 {
		opacity: 0.2;
		clip-path: url(#SVGID_8_);
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st53 {
		fill: none;
		stroke: #242C88;
		stroke-width: 1.848;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st54 {
		opacity: 0.4;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 7;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st55 {
		opacity: 0.2;
		fill: none;
		stroke: #242C88;
		stroke-width: 7;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st56 {
		opacity: 7.000000e-02;
		fill: #242C88;
	}

	.st57 {
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 4;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st58 {
		opacity: 0.4;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 8;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st59 {
		opacity: 0.2;
		fill: none;
		stroke: #242C88;
		stroke-width: 8;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st60 {
		fill: none;
		stroke: #FF5751;
		stroke-width: 4;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st61 {
		fill: none;
		stroke: #242C88;
		stroke-width: 4;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}
</style><rect class="st1 choose-svg-elem-1" height="83" width="68" x="11" y="17"></rect><rect
									class="st2 choose-svg-elem-2"
									height="83" width="68" x="11"
									y="17"></rect><path
									class="st14 choose-svg-elem-3"
									d="M33,46H23c-1.1,0-2-0.9-2-2V34c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C35,45.1,34.1,46,33,46z"></path><path
									class="st14 choose-svg-elem-4"
									d="M32.8,66H23c-1.1,0-2-0.9-2-2V54c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v9.8C35,65,34,66,32.8,66z"></path><path
									class="st14 choose-svg-elem-5"
									d="M33,87H23c-1.1,0-2-0.9-2-2V75c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C35,86.1,34.1,87,33,87z"></path><path
									class="st2 choose-svg-elem-6"
									d="M33,46H23c-1.1,0-2-0.9-2-2V34c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C35,45.1,34.1,46,33,46z"></path><path
									class="st2 choose-svg-elem-7"
									d="M32.8,66H23c-1.1,0-2-0.9-2-2V54c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v9.8C35,65,34,66,32.8,66z"></path><path
									class="st2 choose-svg-elem-8"
									d="M33,87H23c-1.1,0-2-0.9-2-2V75c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C35,86.1,34.1,87,33,87z"></path><path
									class="st16 choose-svg-elem-9" d="M79,101V24H28c-1.1,0-2,0.9-2,2v75H79z"></path><rect
									class="st1 choose-svg-elem-10" height="83" width="68" x="31" y="29"></rect><rect
									class="st2 choose-svg-elem-11" height="83" width="68" x="31" y="29"></rect><line
									class="st34 choose-svg-elem-12" x1="63" x2="75" y1="53" y2="53"></line><line
									class="st34 choose-svg-elem-13" x1="63" x2="87" y1="48" y2="48"></line><path
									class="st14 choose-svg-elem-14"
									d="M54,58H44c-1.1,0-2-0.9-2-2V46c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C56,57.1,55.1,58,54,58z"></path><polyline
									class="st2 choose-svg-elem-15" points="45.3,51.7 48.2,54.4 53.9,48.6 "></polyline><line
									class="st34 choose-svg-elem-16" x1="63" x2="75" y1="74" y2="74"></line><line
									class="st34 choose-svg-elem-17" x1="63" x2="87" y1="68" y2="68"></line><path
									class="st14 choose-svg-elem-18"
									d="M54,78H44c-1.1,0-2-0.9-2-2V66c0-1.1,0.9-2,2-2h9.8c1.2,0,2.2,1,2.2,2.2V76C56,77.1,55.1,78,54,78z"></path><polyline
									class="st2 choose-svg-elem-19" points="45.3,71.9 48.2,74.6 53.9,68.9 "></polyline><line
									class="st34 choose-svg-elem-20" x1="63" x2="75" y1="94" y2="94"></line><line
									class="st34 choose-svg-elem-21" x1="63" x2="87" y1="89" y2="89"></line><path
									class="st14 choose-svg-elem-22"
									d="M54,98H44c-1.1,0-2-0.9-2-2V86c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C56,97.1,55.1,98,54,98z"></path><path
									class="st2 choose-svg-elem-23"
									d="M54,58H44c-1.1,0-2-0.9-2-2V46c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C56,57.1,55.1,58,54,58z"></path><path
									class="st2 choose-svg-elem-24"
									d="M54,78H44c-1.1,0-2-0.9-2-2V66c0-1.1,0.9-2,2-2h9.8c1.2,0,2.2,1,2.2,2.2V76C56,77.1,55.1,78,54,78z"></path><path
									class="st2 choose-svg-elem-25"
									d="M54,98H44c-1.1,0-2-0.9-2-2V86c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C56,97.1,55.1,98,54,98z"></path><polygon
									class="st16 choose-svg-elem-26"
									points="99,57.6 65.2,77.5 53.6,94.9 74.4,93.1 99,78.6 "></polygon><g><polygon
										class="st1 choose-svg-elem-27"
										points="111.4,50.1 73.8,87.7 54.1,94.6 61,74.9 98.6,37.3  "></polygon><rect
										class="st18 choose-svg-elem-28" height="18.1"
										transform="matrix(0.7071 -0.7071 0.7071 0.7071 -18.9596 79.2808)" width="53.2"
										x="59.6" y="53.5"></rect><rect class="st16 choose-svg-elem-29" height="5.3"
																	   transform="matrix(0.7071 -0.7071 0.7071 0.7071 -20.8293 83.7946)"
																	   width="53.2" x="64.1" y="64.4"></rect><polygon
										class="st3 choose-svg-elem-30" points="57.1,86 54.1,94.4 62.5,91.4  "></polygon><polygon
										class="st2 choose-svg-elem-31"
										points="111.4,50.1 73.8,87.7 54.1,94.6 61,74.9 98.6,37.3  "></polygon><path
										class="st13 choose-svg-elem-32"
										d="M111.4,50.1l6-6c1.7-1.7,1.7-4.4,0-6l-6.8-6.8c-1.7-1.7-4.4-1.7-6,0l-6,6L111.4,50.1z"></path><path
										class="st2 choose-svg-elem-33"
										d="M111.4,50.1l6-6c1.7-1.7,1.7-4.4,0-6l-6.8-6.8c-1.7-1.7-4.4-1.7-6,0l-6,6L111.4,50.1z"></path><line
										class="st2 choose-svg-elem-34" x1="80.6" x2="106.9" y1="73.4" y2="47.1"></line><line
										class="st2 choose-svg-elem-35" x1="70" x2="76.1" y1="84" y2="77.9"></line><rect
										class="st1 choose-svg-elem-36" height="18.1"
										transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.5282 86.9153)" width="7.4"
										x="100.9" y="35.1"></rect><rect class="st16 choose-svg-elem-37" height="18.1"
																		transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.5282 86.9153)"
																		width="7.4" x="100.9" y="35.1"></rect><rect
										class="st2 choose-svg-elem-38" height="18.1"
										transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.5282 86.9153)" width="7.4"
										x="100.9" y="35.1"></rect></g></svg>
						</span>
					</h2>
				</div>

				<div class="title-block container">
					<div class="product-slider">
						<div class="product">
							<div class="product-swiper__wrapper catalog-list">
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisence AS-09UW4RYDDB05 Smart DC Inverter
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc"><span>Тип компрессора:</span>
															<span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc"><span>Размещение внутреннего блока:</span>
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc"><span>Площадь помещения:</span>
															<span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc"><span>Уровень шума:</span>
															<span>23.5 - 40.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">
															<span>Мощность кондиционера:</span> <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc"><span>Режим работы:</span>
															<span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc"><span>Поддержка Wi-Fi:</span>
															<span>да</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>30 190 ₽</span>-->
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UR4SYDDB1G
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>25&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума:
															<span>24 - 39 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>36 490 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>

								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>

								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>

								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>

								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>

								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>

								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>

								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
											</div>
										</div>

									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item">
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>

											<div class="product-swiper__image">
												<img alt="product-swiper-img"
													 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
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
														<li class="product-swiper__item-desc">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item-desc">Размещение внутреннего блока:
															<span>настенный</span>
														</li>
														<li class="product-swiper__item-desc">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные
														характиристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item-desc">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item-desc">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item-desc">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item-desc">Поддержка Wi-Fi:
															<span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить
<!--													за <span>44 990 ₽</span>-->
												</button>
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
