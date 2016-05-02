<?php
include_once "model/Request.php";
include_once "model/Friendship.php";
include_once "database/DatabaseConnector.php";

class FriendshipController
{
    public function register($request)
    {
        $params = $request->get_params();
        $friendship = new Frindship($params["solicitation"]);
        $db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");
        $conn = $db->getConnection();
        return $conn->query($this->generateInsertQuery($friendship));
    }
    private function generateInsertQuery($friendship)
    {
        $query =  "INSERT INTO friendship (solicitation) VALUES ('".
            $friendship->get_solicitation()."')";
        return $query;
    }