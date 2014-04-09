<form action="<?php echo JRoute::_('index.php?option=com_blog&layout=edit&id=' . (int) $this->item->id); ?>" method="post" id="adminForm" name="adminForm">
	<?php foreach ($this->form->getFieldset('basic') as $field) : ?>
		<div class="control-group">
			<div class="control-label">
				<?php echo $field->label; ?>
			</div>
			<div class="controls">
				<?php echo $field->input; ?>
			</div>
		</div>
	<?php endforeach; ?>

	<input type="hidden" name="id" value="<?php echo $this->item->id; ?>"/>
	<input type="hidden" name="option" value="com_blog"/>
	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
</form>
