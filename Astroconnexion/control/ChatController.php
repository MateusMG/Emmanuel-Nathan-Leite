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