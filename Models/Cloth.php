<?php
require_once 'Product.php';
/**
* 
*/
class Cloth extends Product
{
	private $brand;
	
	public function __construct($id){
		parent::__construct($id,'cloths');
		$data = $this->getData($id);
		$this->brand=$data['brand'];
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