<?php

class DB {
	private $data;
	public function __construct($name){
		$this->data= require __DIR__.'/../data/'.$name.'.php';
	}

	public function all(){
		return $this->data;
	}
	public function count (){
		return count($this->data);
	}

	public function get($id){
		return $this->data[$id];
	}
}