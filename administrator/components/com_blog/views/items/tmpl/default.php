<?php

$orderCol = $this->state->get('list.ordering');
$orderDir = $this->state->get('list.direction');
?>

<form action="<?php echo JRoute::_('index.php'); ?>"
      method="post"
      name="adminForm"
      id="adminForm">
	<div>
		<div class="pull-right">
			<?php echo $this->pagination->getLimitBox(); ?>
		</div>
		<div class="clearfix"></div>
	</div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th width="1%">
					<?php echo JHtml::_('grid.checkall'); ?>
				</th>
				<th>
					<?php echo JHtml::_('grid.sort', 'Title', 'a.title', $orderDir, $orderCol); ?>
				</th>
				<th>
					<?php echo JHtml::_('grid.sort', 'Id', 'a.id', $orderDir, $orderCol); ?>
				</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="3">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
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
	<input type="hidden" name="filter_order" value="<?php echo $orderCol; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $orderDir; ?>" />
	<?php echo JHtml::_('form.token'); ?>
</form>
