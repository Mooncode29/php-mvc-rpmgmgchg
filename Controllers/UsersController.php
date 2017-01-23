<?php
require_once __DIR__.'/../Models/DB.php';
require_once __DIR__.'/../Models/User.php';

class UsersController {
	public function home(){
		$nbUsers = (new DB('users'))->count();
		$users = [];
		for ($i = 0; $i<$nbUsers; $i++){
			$users[]= new User($i+1);
		}
		require __DIR__.'/../Views/userTable.php';
	}

}