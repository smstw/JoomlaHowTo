<?php

defined('_JEXEC') or die;

$controller	= JControllerLegacy::getInstance('Flower');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
