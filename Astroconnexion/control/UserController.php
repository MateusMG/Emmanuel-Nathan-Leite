<?php

include_once "model/Request.php";
include_once "model/User.php";
include_once "database/DatabaseConnector.php";

class UserController
{

	private $requiredParameters = 
	[
		"firstName",
		"lastName", 
		"birthdate",
		"birthplace",
		"birthtime",
		"gender",
		"email",
		"password",
		"codSign",
		"codChat",
		"codFriendship",
 	];

	public function register($request)
	{
		$params = $request->get_params();

		if ($this->isValid($params)) {
			$user = new User($params["firstName"],
				 $params["lastName"],
				 $params["birthdate"],
				 $params["birthplace"],
				 $params["birthtime"],
				 $params["gender"],
				 $params["email"],
				 $params["password"],
				 $params["codSign"],
				 $params["codChat"],
				 $params["codFriendship"]);

		$db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($user));	
		}else{
			echo "Erro 400: Bad Request";
		}
	}

	private function generateInsertQuery($user)
	{
		$query =  "INSERT INTO user (firstName, lastName, birthdate, birthplace, birthtime, gender, email, password, codSign, codChat, codFriendship) VALUES 
					('".$user->get_firstName()."','".
					$user->get_lastName()."','".
					$user->get_birthdate()."','".
					$user->get_birthplace()."','".
					$user->get_birthtime()."','". 
					$user->get_gender()."','".
					$user->get_email()."','".
					$user->get_password()."','".
					$user->get_codSign()."','".
					$user->get_codChat()."','".
					$user->get_codFriendship()."')";

		return $query;						
	}

	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result =  $conn->query("SELECT firstName, lastName, birthdate, birthplace, birthtime, gender, password, codSign, codChat, codFriendship FROM user WHERE ".$crit);
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

	 private function isValid($parameters)
    {
        $keys = array_keys($parameters);
        $diff1 = array_diff($keys, $this->requiredParameters);
        $diff2 = array_diff($this->requiredParameters, $keys);
        if (empty($diff2) && empty($diff1))
            return true;
        return false;
    }
}