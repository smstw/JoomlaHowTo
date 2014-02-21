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
	 * @var JPagination
	 */
	protected $pagination;

	/**
	 * @var object
	 */
	protected $state;

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
		$this->pagination = $this->get('Pagination');
		$this->state = $this->get('State');

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
		JToolbarHelper::title('Blog item list');

		JToolbarHelper::addNew('item.add');
		JToolbarHelper::editList('item.edit');
		JToolbarHelper::deleteList('Are you sure?', 'items.delete');
	}
}
