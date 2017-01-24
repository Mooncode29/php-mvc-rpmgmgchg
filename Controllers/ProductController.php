<?php

require_once __DIR__.'/../Models/DB.php';
require_once __DIR__.'/../Models/Vegetable.php';
require_once __DIR__.'/../Models/Cloth.php';


class ProductController {
	public function home(){
		$nbVegetables = (new DB('vegetables'))->count();
		$products = [];
		for ($i = 0; $i<$nbVegetables; $i++){
			$products[]= new Vegetable($i);
		}
		$nbCloths = (new DB('cloths'))->count();
		for ($i = 0; $i<$nbCloths; $i++){
			$products[]= new Cloth($i);
		}
		require __DIR__.'/../Views/productTable.php';
	}

}
?>