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
		"email",
		"password",
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
				 $params["email"],
				 $params["password"]);

		$db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");

		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($user));	
		}else{
			echo "Erro 400: Bad Request";
		}

	}

	private function generateInsertQuery($user)
	{
		$query =  "INSERT INTO user (firstName, lastName, birthdate, birthplace, birthtime, email, password) VALUES 
					('".$user->get_firstName()."','".
					$user->get_lastName()."','".
					$user->get_birthdate()."','".
					$user->get_birthplace()."','".
					$user->get_birthtime()."','". 
					$user->get_email()."','".
					$user->get_password()."')";

		return $query;						
	}

	// FUNCTION TO SEARCH A USER

	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);

		$db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");

		$conn = $db->getConnection();

		$result =  $conn->query("SELECT firstName, lastName, birthdate, birthplace, birthtime, email, password FROM user WHERE ".$crit);
		//foreach($result as $row)

		return $result->fetchAll(PDO::FETCH_ASSOC);
		if(empty($fetch) || isset($params["firstName"])){ 
		}else{
			if(isset($params["firstName"]) && isset($params["password"])){
				$this->createSession($fetch[0]["firstName"]);
			}
		}
		return $fetch;
	}

	private function createSession($params){
		start_session();
		$_SESSION["firstName"] = $params;
		return $_SESSION["firstName"];
	}

	// FUNCTION TO UPDATE A USER

	public function update($request)
	{
		$params = $request->get_params();
		$db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");
		$conn = $db->getConnection();
		return $conn->query($this->generateUpdateQuery($params));
	}
	private function generateUpdateQuery($params)
	{
		$crit = $this->generateUpdateCriteria($params);
		return "UPDATE user SET " . $crit . " WHERE email = '" . $params["email"] . "'";
	}
	private function generateUpdateCriteria($params)
	{
		$criteria = "";
		foreach ($params as $key => $value)
		{
			$criteria = $criteria.$key." = '".$value."' ,";
		}
		return substr($criteria, 0, -2);
	}

	// FUNCTION TO DELETE A USER

    public function delete($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->prepare("DELETE FROM user WHERE email = '" . $params["email"] . "'");
		$result->bindParam(1, $params['email']);
		$result->execute();
		return $result;
	}

	// CRITERIA TO SEARCH A USER

	private function generateCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '%".$value."%' AND ";
		}
		return substr($criteria, 0, -4);	
	}

	// FUNCTION TO VERIFY THE VALUES OF A USER

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