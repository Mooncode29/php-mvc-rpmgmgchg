<?php
/**
* 
*/
require_once 'DB.php';
class Product extends DB {
	private $id;
	private $name;
	private $price;
	
	public function __construct($id,$childClass){
		parent::__construct($childClass);
		$data = $this->getData($id);
		$this->id=$data['id'];
		$this->name=$data['name'];
		$this->price=$data['price'];
		
	}
	public function getData($id){
		return parent::get($id);
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