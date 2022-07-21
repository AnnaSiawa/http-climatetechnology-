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
								name="name"
								id="name"
								placeholder="Ваше имя"
								class="_req"/>
						</div>
						<div class="input">
							<div class="input-name">Фамилия</div>
							<label for="surname"></label>
							<input
								type="text"
								name="ser_name"
								id="surname"
								placeholder="Ваша фамилия"/>
						</div>
						<div class="input">
							<div class="input-name">Номер телефона</div>
							<label for="phone"></label>
							<input
								type="text"
								name="phone"
								id="phone"
								placeholder="Ваш номер телефона"
								class="_req"/>
						</div>
						<div class="input">
							<div class="input-name">Адрес</div>
							<label for="address"></label>
							<input type="text" name="address" id="address" placeholder="Ваш адрес"/>
						</div>
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