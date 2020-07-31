<?php 

require "ape.php";
require "frog.php";

class animal{
	public $name;
	public $legs=2;
	public $cold_blooded='false';

	public function __construct($name){
		$this->name = $name;
	}
	public function get_name(){
		return 'Nama binatang ini adalah '.$this->name;
	}
	public function get_legs(){
		return "<br>Jumlah Kakinya ".$this->legs;
	}
	public function get_cold_blooded(){
		return "<br>hewan ini berdarah dingin? ".$this->cold_blooded;
	}
}
class ape extends animal {
	
}

 ?>