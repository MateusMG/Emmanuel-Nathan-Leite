<?php
include_once "model/Request.php";
include_once "model/Chat.php";
include_once "database/DatabaseConnector.php";

class FriendshipController
{
    public function register($request)
    {
        $params = $request->get_params();
        $chat = new Frindship($params["userchat"]);

        $db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");

        $conn = $db->getConnection();

        return $conn->query($this->generateInsertQuery($chat));
    }
    private function generateInsertQuery($chat)
    {
        $query =  "INSERT INTO chat (userchat) VALUES ('".
            $chat->get_userchat()."')";
        return $query;
    }

    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);
        $db = new DatabaseConnector("localhost", "Astroconnexion", "mysql", "", "root", "");
        $conn = $db->getConnection();
        $result = "SELECT userchat FROM chat WHERE ".$crit;
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