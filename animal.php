<?php 


class animal{
	public $name;
	public $legs;
	public $cold_blooded;

	public function set_name($name){
		$this->name=$name;
	}
	public function get_name(){
		return $this->name;
	}

	public function set_legs(){
		$this->legs=2;
	}
	public function get_legs(){
		return $this->legs;
	}

	public function set_cold_blooded(){
		$this->cold_blooded=false;
	}
	public function get_cold_blooded(){
		return $this->false;
	}
}

 ?>