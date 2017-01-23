<?php
require_once 'Product.php';
/**
* 
*/
class Cloth extends Product
{
	private $brand;
	
	function __construct($idNum,$productName,$productPrice,$brandCloth)
	{
		parent::__construct($idNum,$productName,$productPrice);
		$this->setBrand($brandCloth);

	}
	public function getBrand(){
		return $this->brand;
	}
	public function setBrand($brandCloth){
		return $this->brand= $brandCloth;
	}
	public function try(){
		return;
	}
}
?>