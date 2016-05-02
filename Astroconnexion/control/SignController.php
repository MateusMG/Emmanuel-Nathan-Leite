<?php
include_once "model/Request.php";
include_once "model/Sign.php";
include_once "database/DatabaseConnector.php";

class SignController
{
    public function register($request)
    {
        $params = $request->get_params();
        $sign = new Sign($params["sun"],
            $params["moon"],
            $params["ascendant"]),
            $params["mercury"]),
            $params["venus"]),
            $params["mars"]),
            $params["jupiter"]),
            $params["saturn"]),
            $params["uranus"]),
            $params["neptune"]),
            $params["pluto"]);
        $db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");
        $conn = $db->getConnection();
        return $conn->query($this->generateInsertQuery($sign));
    }
    private function generateInsertQuery($sign)
    {
        $query =  "INSERT INTO sign (sun, moon, ascendant, mercury, venus, mars, jupiter, saturn, uranus, neptune, pluto) VALUES ('".
            $sign-> get_sun()."','".
            $sign->get_moon()."','".
            $sign->get_ascendant()."','".
            $sign->get_mercury()."','".
            $sign->get_venus()."','".
            $sign->get_mars()."','".
            $sign->get_jupiter()."','".
            $sign->get_saturn()."','".
            $sign->get_uranus()."','".
            $sign->get_neptune()."','".
            $sign->get_pluto()."')";
        return $query;
    }