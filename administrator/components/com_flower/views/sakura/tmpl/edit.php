<?php

?>

<form action="<?php echo JUri::getInstance(); ?>"
	method="post"
	name="adminForm"
	id="adminForm">

	<div class="form-horizontal">
		<div class="row-fluid">
			<div class="span8">
				<?php
				foreach ($this->form->getFieldSet('basic') as $field)
				{
					echo $field->getControlGroup();
				}
				?>
			</div>
			<div class="span4">
				<?php
				foreach ($this->form->getFieldSet('datetime') as $field)
				{
					echo $field->getControlGroup();
				}
				?>
			</div>
		</div>
	</div>

	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="id" value="<?php echo $this->item->id; ?>"/>
	<?php echo JHtml::_('form.token'); ?>
</form>
