<?php

/**
 * Class BlogViewItems
 */
class BlogViewItems extends JViewLegacy
{
	/**
	 * @var array
	 */
	protected $items = array();

	/**
	 * Execute and display a template script.
	 *
	 * @param string $tpl The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return mixed A string if successful, otherwise a Error object.
	 */
	public function display($tpl = null)
	{
		$this->items = $this->get('Items');

		return parent::display($tpl);
	}
}
