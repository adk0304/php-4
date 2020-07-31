<?php 
class frog extends animal {

	public $legs=4;
	public $jump='hop hop';
	public function jump(){
		return "<br>Hewan ini melompat dengan suara ".$this->jump;
	}
}
 ?>