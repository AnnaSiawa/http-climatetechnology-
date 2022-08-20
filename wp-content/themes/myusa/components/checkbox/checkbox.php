<?php
$image = "";
$label = "";
$id = "";

extract($params);
?>

<div class="checkbox">
	<input
		class="checkbox-input _req"
		checked
		type="checkbox"
		name="agreement"
		id="<?= $id ?>"/>
	<label class="checkbox-label" for="<?= $id ?>"><?= $label ?></label>
</div>