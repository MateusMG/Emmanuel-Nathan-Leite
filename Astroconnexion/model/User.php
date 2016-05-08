<?php
class User{
	
	private $firstName;
	private $lastName;
	private $birthdate;
	private $birthplace;
	private $birthtime;
	private $gender;
	private $email;
	private $password;

	
	
	public function __construct($firstName, $lastName, $birthdate, $birthplace, $birthtime, $gender, $email, $password){
		$this->set_firstName($firstName);
		$this->set_lastName($lastName);
		$this->set_birthdate($birthdate);
		$this->set_birthplace($birthplace);
		$this->set_birthtime($birthtime);
		$this->set_gender($gender);
		$this->set_email($email);
		$this->set_password($password);
	}
	
	//SET
	private function set_firstName ($firstName){
		$this->firstName = $firstName;
	}
	
	private function set_lastName ($lastName){
		$this->lastName = $lastName;
	}
	
	private function set_birthdate($birthdate){
		$this->birthdate = $birthdate;
	}
	
	private function set_birthplace($birthplace){
		$this->birthplace = $birthplace;
	}
	
	private function set_birthtime($birthtime){
		$this->birthtime = $birthtime;
	}

	private function set_gender($gender){
		$this->email = $email;
	}

	
	private function set_password($password){
		$this->password = $password;
	}


	//GET
	public function get_Name (){
		echo $name;
	}
	
	public function get_lastname (){
		echo $lastName;
	}
	
	public function get_birthdate(){
		echo $birthdate;
	}
	
	public function get_birthplace(){
		echo $birthplace;
	}
	
	public function get_birthtime(){
		echo $birthtime;
	}

	public function get_gender(){
		echo $gender;
	}

	public function get_email(){
		echo $email;
	}

	public function get_password(){
		echo $password;
	}
}