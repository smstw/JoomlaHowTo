<?php

defined('_JEXEC') or die;

if (! JFactory::getUser()->authorise('core.manage', 'com_flower'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

JLoader::registerNamespace('Flower', __DIR__ . '/src');

$controller	= JControllerLegacy::getInstance('Flower');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
