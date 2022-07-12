<?php
$image = "";
$title = "";
$disc = "";

extract($params);
?>

<div>
	<img src="<?= bloginfo('template_url'); ?><?= $image?>" alt="install-img">
</div>
<h3><?= $title ?></h3>
<div><?= $disc?></div>
<div>
	<a href="#">
		<span>Узнать подробнее</span>
		<span><img alt=""
				   src="<?php bloginfo('template_url'); ?>/dist/images/arrow.png"></span>
	</a>
</div>