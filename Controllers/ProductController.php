<?php
require_once __DIR__.'/../Models/Cloth.php';


class ProductController {
	public function home(){
		$nbProducts = (new DB('products'))->count();
		$products = [];
		for ($i = 0; $i<$nbProducts; $i++){
			$products[]= new Product($i+1);
		}
		require __DIR__.'/../Views/productTable.php';
	}

}
?>