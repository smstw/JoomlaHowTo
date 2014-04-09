<?php

defined('_JEXEC') or die;

class BlogViewPosts extends JViewLegacy
{
	public function display($tpl = null)
	{
		$this->items         = $this->get('Items');
		$this->pagination    = $this->get('Pagination');
		$this->state         = $this->get('State');
		$this->authors       = $this->get('Authors');
		$this->filterForm    = $this->get('FilterForm');
		$this->activeFilters = $this->get('ActiveFilters');

		$this->addToolbar();

		parent::display($tpl);
	}

	protected function addToolbar()
	{
		JToolbarHelper::addNew('post.add');
		JToolbarHelper::editList('post.edit');
		JToolbarHelper::deleteList("確定刪除嗎?", "posts.delete", "刪除");
	}
}
