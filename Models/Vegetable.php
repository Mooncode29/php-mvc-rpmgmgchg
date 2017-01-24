<?php
require_once 'Product.php';
/**
* 
*/
class Vegetable extends Product
{
	private $productorName;
	private $harvestedAt;
	public function __construct($id){
			parent::__construct($id,'vegetables');
			$data = $this->getData($id);			
			$this->productorName=$data['productorName'];			
			$this->harvestedAt=$data['harvestedAt'];
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