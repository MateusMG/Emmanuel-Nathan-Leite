<?php
include_once "model/Request.php";
include_once "model/Friendship.php";
include_once "database/DatabaseConnector.php";

class FriendshipController
{

    private $requiredParameters = 
    [
        "solicitation",
    ];

    public function register($request)
    {
        $params = $request->get_params();

        if ($this->isValid($params)) {
            $friendship = new Frindship($params["solicitation"]);
            $db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");

            $conn = $db->getConnection();

            return $conn->query($this->generateInsertQuery($friendship));
        }else{
            echo "Erro 400: Bad Request";
        }
    }
    private function generateInsertQuery($friendship)
    {
        $query =  "INSERT INTO friendship (solicitation) VALUES ('".
            $friendship->get_solicitation()."')";
        return $query;
    }

     public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");

        $conn = $db->getConnection();
        
        $result =  $conn->query("SELECT solicitation FROM friendship WHERE ".$crit);
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