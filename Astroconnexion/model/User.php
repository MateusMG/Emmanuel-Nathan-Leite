<?php
class User{
	
	private $firstName;
	private $lastName;
	private $birthdate;
	private $birthplace;
	private $birthtime;
	private $email;
	private $password;

	
	
	public function __construct($firstName, $lastName, $birthdate, $birthplace, $birthtime, $email, $password){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->birthdate = $birthdate;
		$this->birthplace = $birthplace;
		$this->birthtime = $birthtime;
		$this->email = $email;
		$this->password = $password;
	}
	
	//GET
	public function get_firstName (){
		return $this->firstName;
	}
	public function get_lastName (){
		return $this->lastName;
	}
	
	public function get_birthdate(){
		return $this->birthdate;
	}
	
	public function get_birthplace(){
		return $this->birthplace;
	}
	
	public function get_birthtime(){
		return $this->birthtime;
	}

	public function get_email(){
		return $this->email;
	}

	public function get_password(){
		return $this->password;
	}
}