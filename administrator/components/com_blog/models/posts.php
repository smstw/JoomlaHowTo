<?php

defined('_JEXEC') or die;

class BlogModelPosts extends JModelList
{
	public function __construct($config = array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id',    'a.id',
				'title', 'a.title',
				'alias', 'a.alias'
			);
		}

		parent::__construct($config);
	}

	/**
	 * Get list query
	 *
	 * @return  JDatabaseQuery
	 */
	protected function getListQuery()
	{
		// Create a new query object.
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$user = JFactory::getUser();
		$app = JFactory::getApplication();

		// Select the required fields from the table.
		$query->select("*")
			->from('#__blog_posts AS a');

		// Filter by search in title.
		$search = $this->getState('filter.search');

		if (!empty($search))
		{
			$search = $db->quote('%' . $db->escape($search, true) . '%');
			$query->where('(a.title LIKE ' . $search . ' OR a.alias LIKE ' . $search . ')');
		}

		// Order
		$orderCol = $this->state->get('list.ordering', 'a.title');
		$orderDirn = $this->state->get('list.direction', 'asc');

		$query->order($db->escape($orderCol . ' ' . $orderDirn));

		return $query;
	}

	/**
	 * populateState
	 *
	 * @param string $ordering
	 * @param string $direction
	 *
	 * @return  void
	 */
	public function populateState($ordering = 'a.id', $direction = 'asc')
	{
		parent::populateState($ordering, $direction);
	}
}
