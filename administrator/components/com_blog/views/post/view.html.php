<?php

defined('_JEXEC') or die;

class BlogViewPost extends JViewLegacy
{
	public function display($tpl = null)
	{
		$this->item = $this->get('Item');
		$this->getForm();

		$this->addToolbar();

		parent::display($tpl);
	}

	protected function addToolbar()
	{
		JToolbarHelper::apply('post.apply');
		JToolbarHelper::cancel('post.cancel');
	}
}
