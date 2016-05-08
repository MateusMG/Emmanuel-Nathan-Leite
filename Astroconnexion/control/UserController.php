<?php

include_once "model/Request.php";
include_once "model/User.php";
include_once "database/DatabaseConnector.php";

class UserController
{
	public function register($request)
	{
		$params = $request->getParams();
		$user = new User($params["firstName"],
				 $params["lastName"],
				 $params["birthdate"],
				 $params["birthplace"],
				 $params["birthtime"],
				 $params["gender"],
				 $params["email"],
				 $params["password"]);

		$db = new DatabaseConnector("localhost", "Astroconnexion", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($user));	
	}

	private function generateInsertQuery($user)
	{
		$query =  "INSERT INTO user (firstName, lastName, birthdate, birthplace, birthtime, gender, email, password) VALUES ('".$user->getName()."','".
					$user->getLastName()."','".
					$user->getBirthdate()."','".
					$user->getBirthplace()."','".
					$user->getBirthtime()."','". 
					$user->getGender()."','".
					$user->getEmail()."','".
					$user->getPassword()."')";

		return $query;						
	}

	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "Astroconnexion", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = "SELECT firstName, lastName, birthdate, birthplace, birthtime, gender FROM user WHERE ".$crit;
		//foreach($result as $row)
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	private function generateCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '%".$value."%' OR ";
		}
		return substr($criteria, 0, -4);	
	}
}