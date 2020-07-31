<?php 
class ape extends animal {
	public $yell='auuwooooo';
	public function yell(){
		return "<br>Hewan ini bersuara ".$this->yell;
	}
}
 ?>