<?php

?>

<form action="<?php echo JRoute::_('index.php'); ?>"
      method="post"
      name="adminForm"
      id="adminForm">
	<?php
	var_dump($this->items);
	?>
	<input type="hidden" name="option" value="com_blog"/>
	<input type="hidden" name="task" value=""/>
	<?php echo JHtml::_('form.token'); ?>
</form>
