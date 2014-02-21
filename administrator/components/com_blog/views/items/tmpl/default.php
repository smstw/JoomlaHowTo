<?php

?>

<form action="<?php echo JRoute::_('index.php'); ?>"
      method="post"
      name="adminForm"
      id="adminForm">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>
					Title
				</th>
				<th>
					Id
				</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($this->items as $i => $item): ?>
			<tr>
				<td>
					<a href="<?php echo JRoute::_('index.php?option=com_blog&task=item.edit&id=' . $item->id); ?>">
						<?php echo $this->escape($item->title); ?>
					</a>
				</td>
				<td>
					<?php echo $item->id; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>

	<input type="hidden" name="option" value="com_blog"/>
	<input type="hidden" name="task" value=""/>
	<?php echo JHtml::_('form.token'); ?>
</form>
