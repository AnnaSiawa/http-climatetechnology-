<?php

/**
 * Template Name: measure
 */
?>

<?php get_header(); ?>

<div class="content">

	<div class="services-screen homepage-screen">
		<div class="services-screen__row">
			<div class="inner">

				<div class="title-block">
					<h2 class="container">зачем нужен замер?</h2>
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
							<p>Множество типов кондиционеров могут ставиться во&nbsp;множестве типов помещений. Монтаж
								производится исключительно профессионалами&nbsp;&mdash; так почти исключаются повреждения
								климатического оборудования. Располагают&nbsp;же кондиционеры согласно определенным правилам
								и&nbsp;пожеланиям заказчика.
							</p>
							<p>Чтобы монтажники не&nbsp;подыскивали место, спеша поскорее установить кондиционер, нужен
								предварительный осмотр помещения и&nbsp;замер&nbsp;&mdash; так специалист точно определит, какой
								кондиционер нужен в&nbsp;данное помещение.
							</p>
							<p>Осмотр помещения для инженера очень важен. Тут он&nbsp;определяет, как, где и&nbsp;какие можно
								смонтировать кондиционеры, какой тип выбрать. После чего, если установка кондиционера
								возможна, специалист составит схему размещения блоков, спланирует трубопроводные
								фреоновые магистрали, определит отвод конденсата, учтет расположение электрического
								автомата или розетки. С&nbsp;помощью замеров определится и&nbsp;стоимость вашей микроклиматической
								системы (с&nbsp;установкой).</p>
							<p>При расчетных работах не&nbsp;окажется, что сплит-система не&nbsp;справляется с&nbsp;духотой или,
								наоборот, стремится вашу квартиру сделать на&nbsp;манер холодильника Хотя, мощный кондиционер
								можно убавить. А&nbsp;вот слабый, увы, дискомфорта принесет больше. Таким образом, вызов
								замерщика сэкономит финансы на&nbsp;приобретении климатической техники, ведь чересчур мощный
								кондиционер дорогой.</p>
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
