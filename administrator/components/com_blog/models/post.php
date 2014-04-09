<?php

defined('_JEXEC') or die;

class BlogModelPost extends JModelAdmin
{
	/**
	 * getForm
	 *
	 * @param array $data
	 * @param bool  $loadData
	 *
	 * @return  bool|mixed
	 */
	public function getForm($data = array(), $loadData = true)
	{
		$options = array(
			'control' => 'jform',
			'load_data' => $loadData,
		);

		$key = $this->option . '.' . $this->name . '.form';

		$form = $this->loadForm($key, $this->name, $options);

		if (empty($form))
		{
			return false;
		}

		return $form;
	}

	/**
	 * loadFormData
	 *
	 * @return  array
	 */
	public function loadFormData()
	{
		$app = JFactory::getApplication();

		$key = $this->option . '.edit.' . $this->name . '.data';

		$data = $app->getUserState($key, array());

		if (empty($data))
		{
			return $this->getItem();
		}

		return $data;
	}

	/**
	 * Get table
	 *
	 * @param string $name
	 * @param string $prefix
	 * @param array  $options
	 *
	 * @return  JTable
	 */
	public function getTable($name = 'Post', $prefix = 'BlogTable', $options = array())
	{
		return parent::getTable($name, $prefix, $options);
	}
}
