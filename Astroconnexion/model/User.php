<?php
class User{
	
	$name;
	$lastName;
	$birthdate;
	$birthplace;
	$birthtime;
	$gender;
	$email;
	$password;
	$photo;

	
	
	public function __construct($name, $lastName, $birthdate, $birthplace, $birthtime, $gender, $email, $password, $photo){
		$this->set_name($name);
		$this->set_lastName($lastName);
		$this->set_birthdate($birthdate);
		$this->set_birthplace($birthplace);
		$this->set_birthtime($birthtime);
		$this->set_gender($gender);
		$this->set_email($email);
		$this->set_password($password);
		$this->set_photo($photo);
	}
	
	//SET
	private function set_name ($name){
		$this->name = $name;
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

	private function set_photo($photo){
		$this->photo = $photo;
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