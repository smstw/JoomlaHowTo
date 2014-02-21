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

		$this->setToolBar();

		return parent::display($tpl);
	}

	/**
	 * Setup page title and toolbar.
	 *
	 * @return void
	 */
	public function setToolBar()
	{
		JToolbarHelper::title('Edit blog item');

		JToolbarHelper::apply('item.apply');
		JToolbarHelper::save('item.save');
		JToolbarHelper::save2new('item.save2new');
		JToolbarHelper::cancel('item.cancel');
	}
}
