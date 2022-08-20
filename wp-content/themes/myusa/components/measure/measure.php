<div class="measure-screen homepage-screen">
	<div class="measure-screen__row">
		<div class="inner">

			<div class="title-block">
				<h2 class="container">записаться на замер</h2>
			</div>

			<div class="title-block">
				<div class="measure-screen-img">
					<img src="<?php bloginfo('template_url'); ?>/dist/images/measure-img.png" alt="">
				</div>
				<div class="measure-screen-form container">
					<form action="mail.php" method="POST" id="form-mail">

						<div class="form-title">Необходимо заполнить данные:</div>
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
							<div class="input-name">Адрес</div>
							<label for="address"></label>
							<input
								type="text"
								autocomplete="off"
								name="address"
								id="address"
								placeholder="Ваш адрес"/>
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
			</div>
		</div>
	</div>
</div>