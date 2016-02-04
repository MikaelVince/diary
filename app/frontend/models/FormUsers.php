<?php

namespace Diary\Frontend\Models;

class FormUsers extends BaseModel {

	public $id;
	public $name;
	public $family_name;
	public $email;
	public $password;



	public function initialize() {
		$this->setSource('nt_users');
		// $this->hasMany('id', '\Nest\Core\Backend\Models\CmsPagesContent', 'page_id', array('alias'=>'PageContent'));
	}
	public function beforeSave(){
		$di = $this->getDI();
		$this->name = $di->getFilter()->sanitize($this->name, ['string', 'striptags']);
		$this->family_name = $di->getFilter()->sanitize($this->family_name, ['string', 'striptags']);
		$this->email = $di->getFilter()->sanitize($this->email, ['string', 'striptags']);
		$this->password = $di->getFilter()->sanitize($this->password, ['string', 'striptags']);
		$this->passwordConfirm = $di->getFilter()->sanitize($this->passwordConfirm, ['string', 'striptags']);
	}

  public function setPassword($password){

      $di =  $this->getDI();

      $this->password = $di->getsecurity()->hash($password);

  }
}
