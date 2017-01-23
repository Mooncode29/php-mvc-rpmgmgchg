<?php
/**
* 
*/

class Product extends DB {
	private $id;
	private $name;
	private $price;
	
	public function __construct($id){
		parent::__construct('products');
		$data = parent::get($id-1);
		$this->id=$data['id'];
		$this->name=$data['name'];
		$this->price=$data['price'];
		
	}
	public function getProductId(){
		return $this->id;
	}
	public function setProductId($idNum){
		$this->id = $idNum;
	}

	public function getProductName(){
		return $this->name;
	}
	public function setProductName($productName){
		return $this->name= $productName;
	}
	public function getProductPrice(){
		return $this->price;
	}
	public function setProductPrice($productPrice){
		return $this->price= $productPrice;
	}
}
?>