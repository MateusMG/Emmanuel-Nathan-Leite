<?php
class Chat{
	
	private $userchat;
	//private $idSend
	//private $idRecieve
	
	
	public function __construct($userchat){
		$this->set_userchat($userchat);
	}	
	
	//SET
	private function set_userchat ($userchat){
		$this->userchat = $userchat;
	}
	

	//GET
	public function get_userchat (){
		echo $userchat;
	}
	
	
}