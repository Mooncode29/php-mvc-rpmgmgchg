<?php
require_once 'Product.php';
/**
* 
*/
class Vegetable extends Product
{
	private $productorName;
	private $harvestedAt;
	public function __construct($idNum,$productName,$productPrice,$nomProd,$date){
			parent::__construct($idNum,$productName,$productPrice);			
			$this->setProductorName($nomProd);				
			$this->setHarvestedAt($date);
	}
	public function getProductorName(){
		return $this->productorName;
	}
	public function setProductorName($nomProd){

		return $this->productorName = $nomProd;
	}
	public function getHarvestedAt(){
		return $this->harvestedAt;
	}
	public function setHarvestedAt($date){
		return $this->harvestedAt = $date;
	}
	public function isFresh(){
		if($harvestedAt <= new dateTime()){
			return 'vrai';
		}else{
			return'faux';
		}
	}
}