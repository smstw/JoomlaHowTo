<?php

/**
 * Class FlowerViewSakuras
 */
class FlowerViewSakuras extends JViewLegacy
{
	/**
	 * @var array
	 */
	protected $items = array();

	/**
	 * @var JPagination
	 */
	protected $pagination;

	/**
	 * @var JObject
	 */
	protected $state;

	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise a Error object.
	 */
	public function display($tpl = null)
	{
		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');
		$this->state = $this->get('State');

		$this->setToolBar();

		return parent::display($tpl);
	}

	/**
	 * Setup page title and toolbar.
	 *
	 * @return  void
	 */
	public function setToolBar()
	{
		JToolbarHelper::title('Sakura list');

		JToolbarHelper::addNew('sakura.add');
		JToolbarHelper::editList('sakura.edit');
		JToolbarHelper::deleteList('Are you sure?', 'sakuras.delete');
	}
}
