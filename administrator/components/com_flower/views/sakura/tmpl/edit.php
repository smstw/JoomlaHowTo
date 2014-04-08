<?php

?>

<form action="<?php echo JUri::getInstance(); ?>"
	method="post"
	name="adminForm"
	id="adminForm">

	<?php var_dump($this->item); ?>
	<?php var_dump($this->form); ?>

	<input type="hidden" name="task" value=""/>
	<?php echo JHtml::_('form.token'); ?>
</form>
