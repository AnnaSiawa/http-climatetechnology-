<footer class="footer">
	<div class="footer__row container">
		<div class="footer__inner">
			<div class="footer__block">
				<a href="/">
					<div class="footer__title">«Технология климата»</div>
				</a>
				<div class="footer__disc">Качественно установим кондиционер в вашем доме!</div>
			</div>
			<div class="footer__block">
				<div class="footer__subtitle">Меню</div>
				<div class="footer__item-wrap">
					<a href="/">
						<div class="footer__item">Главная</div>
					</a>
					<a href="/measure">
						<div class="footer__item">Замеры</div>
					</a>
					<a href="/mounting">
						<div class="footer__item">Монтаж</div>
					</a>
					<a href="/service">
						<div class="footer__item">Обслуживание</div>
					</a>
					<a href="/products">
						<div class="footer__item">Каталог</div>
					</a>
					<a href="#">
						<div class="footer__item">Наши работы</div>
					</a>
				</div>
			</div>
			<div class="footer__block">
				<div class="footer__subtitle">Контакты</div>
				<div class="footer__item">Адрес: Россия, г.Брянск, ул.Название</div>
				<a class="footer__item" href="tel:+74832300126">
					<div>Телефон: 30-01-26</div>
				</a>
				<a class="footer__item" href="mailto:nazvanie@mail.ru">
					<div>E-mail: nazvanie@mail.ru</div>
				</a>
				<div class="footer__item">График работы: пн-вс с 9:00 до 18:00</div>
			</div>
		</div>
	</div>
</footer>

<div class="modal modal-buy">
	<div class="modal__wrap">
		<div class="modal__inner">
			<h2>Выбранный кондиционер Выбранный кондиционер Выбранный кондиционер</h2>
			<div class="modal__disc">Если вас заинтересовала данная модель, введите ваши данные, чтобы мы&nbsp;могли
				связаться с&nbsp;вами
			</div>

			<div class="measure-screen-form container">
				<form action="mail.php" method="POST" id="form-mail">
					<div class="input">
						<div class="input-name">Имя</div>
						<label for="name"></label>
						<input
							type="text"
							autocomplete="off"
							name="name"
							id="name"
							placeholder="Ваше имя"
							class="_req"/>
					</div>

					<div class="input">
						<div class="input-name">Номер телефона</div>
						<label for="phone"></label>
						<input
							type="text"
							autocomplete="off"
							name="phone"
							id="phone"
							placeholder="Ваш номер телефона"
							class="_req"/>
					</div>

					<div class="input">
						<div class="input-name">Сообщение</div>
						<textarea
							name="message"
							id="message"
							placeholder="Сообщение"></textarea>
					</div>

					<?= Component::render(
						'checkbox',
						[
							'label' => 'Я согласен на обработку персональных данных',
							'id' => 'agreement',
							'req' => '_req',
							'checked' => 'checked',
						]); ?>

					<div class="measure-screen__btn btn">
						<button
							class="button"
							type="submit"
							id="button">
							Отправить
						</button>
					</div>
				</form>
			</div>

			<?= Component::render(
				'install',
				[
					'text' => 'Вернуться назад',
					'link' => '#',
					'class' => 'go-back',
				]); ?>
		</div>
	</div>
</div>

<div class="modal modal-sign-up">
	<div class="modal__wrap">
		<div class="modal__inner">
			<h2>Спасибо за заявку!</h2>
			<div class="modal__disc">Мы&nbsp;свяжемся с&nbsp;вами в&nbsp;ближайшее время для уточнения некоторых
				вопросов.
			</div>
			<?= Component::render(
				'install',
				[
					'text' => 'Вернуться назад',
					'link' => '#',
					'class' => 'go-back',
				]); ?>
		</div>
	</div>
</div>
<?php wp_footer(); ?>


<!--<script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>-->
<!--<script src="/wp-content/themes/t-climate/dist/index.js"></script>-->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
</body>

</html>