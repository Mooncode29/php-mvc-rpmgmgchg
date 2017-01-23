<?php
require 'Controllers/UsersController.php';
require 'Controllers/ProductController.php';
if(!isset($_GET['page'])) {
	return (new UsersController())->home();
}

if($_GET['page']==='products'){
	return (new ProductController())->home();
}