<?php

/**
 * Class BlogModelItem
 */
class BlogModelItem extends JModelAdmin
{
	/**
	 * Get the form from the model.
	 *
	 * @param array   $data     Data for the form.
	 * @param boolean $loadData True if the form is to load its own data (default case), false if not.
	 *
	 * @return mixed A JForm object on success, false on failure
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
	 * @return mixed The data for the form.
	 */
	protected function loadFormData()
	{
		$app = JFactory::getApplication();

		$userStateKey = $this->option . '.edit.' . $this->name . '.data';

		$data = $app->getUserState($userStateKey, array());

		return empty($data) ? $this->getItem() : $data;
	}

	/**
	 * Get Table instance
	 *
	 * @param string $name    The table name. Optional.
	 * @param string $prefix  The class prefix. Optional.
	 * @param array  $options Configuration array for model. Optional.
	 *
	 * @return JTable A JTable object
	 */
	public function getTable($name = 'Item', $prefix = 'BlogTable', $options = array())
	{
		if ('' === $name)
		{
			$name = $this->getName();
		}

		return parent::getTable($name, $prefix, $options);
	}

	/**
	 * Prepare and sanitise the table data prior to saving.
	 *
	 * @param JTable $table A reference to a JTable object.
	 *
	 * @return void
	 */
	protected function prepareTable($table)
	{
		$user = JFactory::getUser();

		// Set default created datetime
		if (empty($table->created))
		{
			$table->created = date('Y-m-d H:i:s');
		}

		// Set default modified datetime
		$table->modified = date('Y-m-d H:i:s');

		// Set default created user id
		if (empty($table->created_by))
		{
			$table->created_by = $user->id;
		}

		// Set default modified user id
		if (empty($table->modified_by))
		{
			$table->modified_by = $user->id;
		}
	}
}
