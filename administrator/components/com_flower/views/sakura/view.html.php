<?php

/**
 * Class FlowerViewSakura
 */
class FlowerViewSakura extends JViewLegacy
{
	/**
	* @var JForm
	*/
	protected $form;

	/**
	 * @var JObject
	 */
	protected $item;

	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise a Error object.
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
	 * @return  void
	 */
	public function setToolBar()
	{
		JToolbarHelper::title('Edit Sakura');

		JToolbarHelper::apply('sakura.apply');
		JToolbarHelper::save('sakura.save');
		JToolbarHelper::save2new('sakura.save2new');
		JToolbarHelper::cancel('sakura.cancel');
	}
}
