<?php

namespace Flower\Model;

/**
 * Class Admin
 *
 * Base model admin class
 */
class Admin extends \JModelAdmin
{
	/**
	 * Get Table instance
	 *
	 * @param   string  $name     The table name. Optional.
	 * @param   string  $prefix   The class prefix. Optional.
	 * @param   array   $options  Configuration array for model. Optional.
	 *
	 * @return  \JTable  A JTable object
	 */
	public function getTable($name = '', $prefix = 'FlowerTable', $options = array())
	{
		if (empty($name))
		{
			$name = $this->getName();
		}

		return parent::getTable($name, $prefix, $options);
	}

	/**
	 * Get the form from the model.
	 *
	 * @param   array    $data      Data for the form.
	 * @param   boolean  $loadData  True if the form is to load its own data (default case), false if not.
	 *
	 * @return  \JForm|boolean  A JForm object on success, false on failure
	 */
	public function getForm($data = array(), $loadData = true)
	{
		$options = array(
			'control' => 'jform',
			'load_data' => $loadData,
		);

		$key = $this->option . '.' . $this->name . '.form';

		$form = $this->loadForm($key, $this->name, $options);

		return $form;
	}

	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return  mixed  The data for the form.
	 */
	protected function loadFormData()
	{
		$key = $this->option . '.edit.' . $this->name . '.data';

		$data = \JFactory::getApplication()->getUserState($key, array());

		return $data ?: $this->getItem();
	}
}
