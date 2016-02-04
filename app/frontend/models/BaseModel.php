<?php

namespace Diary\Frontend\Models;

class BaseModel extends \Phalcon\Mvc\Model {

	protected $di;
	protected $prefix = "nt";

	public function onConstruct(){

		$this->di = $this->getDI();

	}

	public function getSource()
	{

		if (!empty($this->prefix)) {

			return $this->prefix.'_'.strtolower(preg_replace('/\B([A-Z])/', '_$1', (new \ReflectionClass($this))->getShortName()));
		}
	}
}
