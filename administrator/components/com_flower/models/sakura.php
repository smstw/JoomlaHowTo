<?php

use Flower\Model\Admin;

/**
 * Class FlowerModelSakura
 */
class FlowerModelSakura extends Admin
{
	/**
	 * Prepare and sanitise the table data prior to saving.
	 *
	 * @param   JTable  $table  A reference to a JTable object.
	 *
	 * @return  void
	 */
	protected function prepareTable($table)
	{
		$user = JFactory::getUser();

		// Set default created datetime
		if (empty($table->created))
		{
			$table->created = date('Y-m-d H:i:s');
		}

		// Set default modified datetime
		$table->modified = date('Y-m-d H:i:s');

		// Set default created user id
		if (empty($table->created_by))
		{
			$table->created_by = $user->id;
		}

		// Set default modified user id
		if (empty($table->modified_by))
		{
			$table->modified_by = $user->id;
		}
	}
}
