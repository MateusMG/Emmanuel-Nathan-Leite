<?php

include_once "model/Request.php";
include_once "model/User.php";
include_once "database/DatabaseConnector.php";

class UserController
{
	public function register($request)
	{
		$params = $request->get_params();
		$user = new User($params["name"],
				 $params["lastName"],
				 $params["birthdate"],
				 $params["birthplace"],
				 $params["birthtime"],
				 $params["gender"]);
				 $params["email"]);
				 $params["password"]);

		$db = new DatabaseConnector("localhost", "Astroconnexion", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($user));	
	}

	private function generateInsertQuery($user)
	{
		$query =  "INSERT INTO user (name, lastName, birthdate, birthplace, birthtime, gender, email, password) VALUES ('".$user->getName()."','".
					$user->getLastName()."','".
					$user->getBirthdate()."','".
					$user->getBirthplace()."','".
					$user->getBirthtime()."','". 
					$user->getGender()."','".
					$user->getEmail()."','".
					$user->getPassword()."')";

		return $query;						
	}
}