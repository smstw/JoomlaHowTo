<?php

defined('_JEXEC') or die;

/**
 * Class BlogTablePost
 *
 * @since 1.0
 */
class BlogTablePost extends JTable
{
	/**
	 * @param string $db
	 */
	public function __construct(&$db)
	{
		parent::__construct('#__blog_posts', 'id', $db);
	}
}
