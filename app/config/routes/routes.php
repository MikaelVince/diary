<?php


class FrontEndRoutes extends \Phalcon\Mvc\Router\Group
{
        protected $di;

		public function initialize($di)
    	{

        $this->di = $di;

		//Default paths
        $this->setPaths(array(
            'module' => 'frontend',
            'namespace' => 'Nest\Core\Frontend\Controllers'
        ));

        $this->add('/', array(
            'controller' => 'home'
        ));
