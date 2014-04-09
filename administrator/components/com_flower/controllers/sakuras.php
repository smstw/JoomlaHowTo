<?php

/**
 * Class FlowerControllerSakuras
 */
class FlowerControllerSakuras extends JControllerAdmin
{
	/**
	 * Method to get a model object, loading it if required.
	 *
	 * @param   string  $name    The name of the model.
	 * @param   string  $prefix  The prefix for the PHP class name.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  JModelLegacy
	 */
	public function getModel($name = 'Sakura', $prefix = 'FlowerModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}
