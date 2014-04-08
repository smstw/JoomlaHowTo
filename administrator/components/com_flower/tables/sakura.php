<?php

/**
 * Class FlowerTableSakura
 */
class FlowerTableSakura extends JTable
{
	/**
	 * Object constructor to set table and key fields. In most cases this will
	 * be overridden by child classes to explicitly set the table and key fields
	 * for a particular database table.
	 *
	 * @param JDatabaseDriver $db JDatabaseDriver object.
	 */
	public function __construct($db)
	{
		parent::__construct('#__sakuras', 'id', $db);
	}
}
