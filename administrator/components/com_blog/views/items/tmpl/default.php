<?php

?>

<form action="<?php echo JRoute::_('index.php'); ?>"
      method="post"
      name="adminForm"
      id="adminForm">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th width="1%">
					<?php echo JHtml::_('grid.checkall'); ?>
				</th>
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
					<?php echo JHtml::_('grid.id', $i, $item->id); ?>
				</td>
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
	<input type="hidden" name="boxchecked" value="0" />
	<?php echo JHtml::_('form.token'); ?>
</form>
