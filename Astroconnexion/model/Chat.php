<?php
class Chat{
	
	private $userchat;
	//private $idSend
	//private $idRecieve
	
	
	public function __construct($userchat){
		$this->userchat = $userchat;
	}	
	

	//GET
	public function get_userchat (){
		return $this->userchat;
	}
	
	
}