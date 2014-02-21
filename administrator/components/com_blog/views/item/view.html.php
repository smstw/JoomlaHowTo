<?php

/**
 * Class BlogViewItem
 */
class BlogViewItem extends JViewLegacy
{
	/**
	 * @var JForm
	 */
	protected $form;

	/**
	 * @var array
	 */
	protected $item = array();

	/**
	 * Execute and display a template script.
	 *
	 * @param string $tpl The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return mixed A string if successful, otherwise a Error object.
	 */
	public function display($tpl = null)
	{
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

		return parent::display($tpl);
	}
}
