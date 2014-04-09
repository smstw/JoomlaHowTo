<?php

defined('_JEXEC') or die;

class BlogControllerPosts extends JControllerAdmin
{
	public function getModel($name = 'Post', $prefix = 'BlogModel', $config = array('ignore_request' => true))
	{
		return parent::getModel($name, $prefix, $config);
	}
}
