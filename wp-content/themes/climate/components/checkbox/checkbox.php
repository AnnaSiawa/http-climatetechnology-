<?php
$image = "";
$label = "";
$id = "";
$req = "";
$checked = "";

extract($params);
?>

<div class="checkbox">
	<input
		class="checkbox-input <?= $req ?>"
		<?= $checked ?>
		type="checkbox"
		name="agreement"
		id="<?= $id ?>"/>
	<label class="checkbox-label" for="<?= $id ?>"><?= $label ?></label>
</div>