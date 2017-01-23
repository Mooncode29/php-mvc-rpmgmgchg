<?php
/**
* 
*/
require_once 'User.php';
class Client extends User
{
	
	public function __construct($mail,$idName,$time)
	{
		
		parent::setEmail($mail);
		parent::setId($idName);
		parent::setCreatedAt($time);
	}

	public function buy(){

	}
}
?>