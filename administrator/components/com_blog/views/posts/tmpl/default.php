<?php

defined('_JEXEC') or die;

// Short tag
if (ini_get("short_open_tag"))
{
	ini_set("short_open_tag", 1);
}

$items     = $this->items;
$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn  = $this->escape($this->state->get('list.direction'));
?>

<form action="<?= JRoute::_('index.php?option=com_blog&view=posts'); ?>" method="post" name="adminForm" id="adminForm">
	<div id="j-main-container">

		<?= JLayoutHelper::render('joomla.searchtools.default', array('view' => $this)); ?>

		<table class="table">
			<thead>
			<tr>
				<th>
					<?= JHtml::_('grid.checkall'); ?>
				</th>
				<th>
					<?= JHtml::_('searchtools.sort', 'id', 'a.id', $listDirn, $listOrder); ?>
				</th>
				<th>
					<?= JHtml::_('searchtools.sort', 'JGLOBAL_TITLE', 'a.title', $listDirn, $listOrder); ?>
				</th>
			</tr>
			</thead>
			<tfoot>
			<tr>
				<td colspan="3">
					<?= $this->pagination->getListFooter(); ?>
				</td>
			</tr>
			</tfoot>
			<tbody>
			<?php foreach ($items as $i => $item): ?>
				<tr>
					<td>
						<?php echo JHtml::_('grid.id', $i, $item->id); ?>
					</td>
					<td>
						<?= $item->id; ?>
					</td>
					<td>
						<?= $item->title; ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
<?php echo JHtml::_('form.token'); ?>