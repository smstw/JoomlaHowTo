<?php

$controller = JControllerLegacy::getInstance('Blog');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
