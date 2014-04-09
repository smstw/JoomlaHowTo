<?php

/**
 * Class FlowerModelSakuras
 */
class FlowerModelSakuras extends JModelList
{
	/**
	 * Constructor.
	 *
	 * @param   array  $config  An optional associative array of configuration settings.
	 */
	public function __construct($config = array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id',       'sakura.id',
				'title',    'sakura.title',
				'location', 'sakura.location',
				'event',    'sakura.event',
				'created',  'sakura.created',
			);
		}

		parent::__construct($config);
	}

	/**
	 * Method to get a JDatabaseQuery object for retrieving the data set from a database.
	 *
	 * @return  JDatabaseQuery  A JDatabaseQuery object to retrieve the data set.
	 */
	public function getListQuery()
	{
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$orderCol = $this->getState('list.ordering', 'sakura.id');
		$orderDir = $this->getState('list.direction', 'asc');
		$filterSearch = $this->getState('filter.search');

		$query->select('sakura.*')
			->from('#__sakuras AS sakura')
			->order($db->escape($orderCol . ' ' . $orderDir));

		if (! empty($filterSearch))
		{
			$query->where('sakura.`title` LIKE "%' . $filterSearch . '%"');
		}

		return $query;
	}

	/**
	 * Method to auto-populate the model state.
	 *
	 * @param   string  $ordering   An optional ordering field.
	 * @param   string  $direction  An optional direction (asc|desc).
	 *
	 * @return  void
	 */
	public function populateState($ordering = 'sakura.id', $direction = 'asc')
	{
		parent::populateState($ordering, $direction);

		$filterSearch = $this->getUserStateFromRequest($this->context . '.filter.search', 'filter_search');
		$this->setState('filter.search', trim($filterSearch));
	}
}
