<?php

/**
 * Template Name: service
 */
?>

<?php get_header(); ?>

<div class="content">

	<div class="services-screen mounting homepage-screen scroll-top">
		<div class="services-screen__row">
			<div class="inner">

				<div class="title-block">
					<h2 class="container">
						<span class="scroll-title">Обслуживание и ремонт кондиционеров</span>
					</h2>
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
							<p>При правильном монтаже утечек хладагента быть не&nbsp;должно в&nbsp;течение всего срока
								службы, точно так&nbsp;же, как в&nbsp;холодильниках. И&nbsp;все ежегодные дозаправки
								просто свидетельствуют о&nbsp;том, что техника не&nbsp;в&nbsp;порядке и&nbsp;её&nbsp;нужно
								ремонтировать.
							</p>
							<p>Если кондиционер перестал эффективно работать, то&nbsp;прежде всего убедитесь, что оба
								блока сплит-системы содержатся в&nbsp;чистоте. Не&nbsp;забывайте: раз в&nbsp;2&nbsp;недели
								следует чистить фильтры внутреннего блока, а&nbsp;раз в&nbsp;сезон&nbsp;&mdash;
								промывать радиатор наружного блока.
							</p>
							<h3>7 операций, производимых при техобслуживании кондиционера:</h3>
							<ol>
								<li>Чистка фильтров внутреннего блока (сетчатый фильтр грубой очистки).</li>
								<li>Чистка крыльчатки вентилятора охлаждения внутреннего блока (при необходимости).</li>
								<li>Чистка/промывка теплообменника наружного блока (при необходимости).</li>
								<li>Промывка дренажной трубки.</li>
								<li>Проверка работоспособности электрических соединений.</li>
								<li>Диагностика рабочего состояния оборудования кондиционера (замер параметров с целью
									определения достаточности фреона).
								</li>
								<li>Дозаправка/перезаправка фреона (при необходимости). Заправка кондиционера фреоном
									производится через клапан наружного блока, поэтому лучше, чтобы он был легкодоступен
									для обслуживания.
								</li>
							</ol>
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
