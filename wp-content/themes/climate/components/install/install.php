<?php
$image = "";
$title = "";
$disc = "";
$link = "";
$text = "";
$class = "";

extract($params);
?>

<div class="install-wrap container">
	<div class="install-image">
		<img src="<?= bloginfo('template_url'); ?><?= $image ?>" alt="install-img">
	</div>
	<h3><?= $title ?></h3>
	<div class="install-disc"><?= $disc ?></div>
	<div class="install-link">
		<a class="<?= $class ?>" href="<?= $link ?>">
			<span><?= $text ?></span>
			<span>
			<img class="install-arrow-hover" alt=""
				 src="<?php bloginfo('template_url'); ?>/dist/images/arrow-hover.png">
			<img class="install-arrow" alt="" src="<?php bloginfo('template_url'); ?>/dist/images/arrow.png">
		</span>
		</a>
	</div>
</div>