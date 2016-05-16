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
	private $codSign;
	private $codChat;
	private $codFriendship;

	
	
	public function __construct($firstName, $lastName, $birthdate, $birthplace, $birthtime, $gender, $email, $password, $codSign, $codChat, $codFriendship){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->birthdate = $birthdate;
		$this->birthplace = $birthplace;
		$this->birthtime = $birthtime;
		$this->gender = $gender;
		$this->email = $email;
		$this->password = $password;
		$this->codSign = $codSign;
		$this->codChat = $codChat;
		$this->codFriendship = $codFriendship;
	}
	
	//SET
	public function set_firstName ($firstName){
		$this->firstName = $firstName;
	}
	
	public function set_lastName ($lastName){
		$this->lastName = $lastName;
	}
	
	public function set_birthdate($birthdate){
		$this->birthdate = $birthdate;
	}
	
	public function set_birthplace($birthplace){
		$this->birthplace = $birthplace;
	}
	
	public function set_birthtime($birthtime){
		$this->birthtime = $birthtime;
	}

	public function set_gender($gender){
		$this->gender = $gender;
	}

	public function set_email($email){
		$this->email = $email;
	}

	public function set_password($password){
		$this->password = $password;
	}

	public function set_codSign($codSign){
		$this->codSign = $codSign;
	}

	public function set_codChat($codChat){
		$this->codChat = $codChat;
	}

	public function set_codFriendship($codFriendship){
		$this->codFriendship = $codFriendship;
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

	public function get_gender(){
		return $this->gender;
	}

	public function get_email(){
		return $this->email;
	}

	public function get_password(){
		return $this->password;
	}

	public function get_codSign(){
		return $this->codSign;
	}

	public function get_codChat(){
		return $this->codChat;
	}

	public function get_codFriendship(){
		return $this->codFriendship;
	}
}