<?php
class Friendship{
	
	 private $solicitation;

	
	
	public function __construct($solicitation){
		$this->solicitation = $solicitation;
	}	
	
	//SET
	private function set_solicitation ($solicitation){
		$this->solicitation = $solicitation;
	}
	

	//GET
	public function get_solicitation (){
		return $this->solicitation;
	}
	
	
}