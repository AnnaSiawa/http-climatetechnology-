<?php

/**
 * Template Name: mounting
 */
?>

<?php get_header(); ?>

<div class="content">

	<div class="services-screen mounting homepage-screen scroll-top">
		<div class="services-screen__row">
			<div class="inner">

				<div class="title-block">
					<h2 class="container scroll-title">Монтаж кондиционеров</h2>
				</div>

				<div class="title-block">
					<div class="services-content container">
						<div class="services-swiper swiper">
							<div class="services-swiper__wrapper swiper-wrapper">
								<div class="services-swiper__slider swiper-slide">
									<div class="services-swiper__item">
										<div class="services-swiper__img">
											<img
												src="https://st.depositphotos.com/2547675/3009/i/450/depositphotos_30094505-stock-photo-time-clock.jpg"
												alt="services-img">
										</div>
									</div>
								</div>

								<div class="services-swiper__slider swiper-slide">
									<div class="services-swiper__item">
										<div class="services-swiper__img">
											<img
												src="https://mirpozitiva.ru/wp-content/uploads/2019/11/1472042719_15.jpg"
												alt="services-img">
										</div>
									</div>
								</div>
							</div>
							<div class="services-slider-nav container">
								<div class="services-swiper-prev">
									<img alt="swiper-prev-img"
										 src="<?php bloginfo('template_url'); ?>/dist/images/arrow.png">
								</div>
								<div class="services-swiper-pagination"></div>
								<div class="services-swiper-next">
									<img alt="swiper-next-img"
										 src="<?php bloginfo('template_url'); ?>/dist/images/arrow.png">
								</div>
							</div>
						</div>

						<div class="services-disc">
							<p>Каким&nbsp;бы технически совершенным и&nbsp;современным ни&nbsp;был кондиционер, из-за
								непрофессионального монтажа он&nbsp;с&nbsp;течением времени выйдет из&nbsp;строя. Самый
								оптимальный вариант в&nbsp;данной ситуации&nbsp;&mdash; доверить установку
								специализированной техники специалистам. При необходимости может быть осуществлена
								нестандартная установка кондиционера, подразумевающая увеличение длины труб, служащих
								для сопряжения внутреннего и&nbsp;внешнего блоков.
							</p>
							<h3>Этапы монтажа:</h3>
							<ul>
								<li>установка наружного блока сплит-системы на фасадной части дома;</li>
								<li>установка в помещении внутреннего блока кондиционера;</li>
								<li>подготовка отверстий требуемого диаметра в наружной стене для прокладки кабельных
									линий управления и электропитания;
								</li>
								<li>обеспечение магистрали фреона между блоками протяженностью в пределах трех метров;
								</li>
								<li>монтаж дренажного шланга аналогичной длины;</li>
								<li>герметизация отверстий с использованием монтажной пены под технологические
									коммуникации между внутренним и наружным блоками;
								</li>
								<li>пусконаладочные работы;</li>
								<li>уборка помещения после завершения перечисленных выше мероприятий.</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?= Component::render('arrow'); ?>

	<?= Component::render('measure'); ?>

</div>

<?php get_footer(); ?>
