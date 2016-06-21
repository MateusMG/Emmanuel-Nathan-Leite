<?php
include_once "model/Request.php";
include_once "model/Sign.php";
include_once "database/DatabaseConnector.php";

class SignController
{

    private $requiredParameters = 
    [
        "sun",
        "moon", 
        "ascendant",
        "mercury",
        "venus",
        "mars",
        "jupiter",
        "saturn",
        "uranus",
        "neptune",
        "pluto",
    ];

    public function register($request)
    {
        $params = $request->get_params();

        if ($this->isValid($params)) {
            $sign = new Sign($params["sun"],
                 $params["moon"],
                 $params["ascendant"],
                 $params["mercury"],
                 $params["venus"],
                 $params["mars"],
                 $params["jupiter"],
                 $params["saturn"],
                 $params["uranus"],
                 $params["neptune"],
                 $params["pluto"]);

        $db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");

        $conn = $db->getConnection();
        
        return $conn->query($this->generateInsertQuery($sign));
        } else {
            echo "Error 400: Bad Request";
        }
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

    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");

        $conn = $db->getConnection();
        
        $result =  $conn->query("SELECT sun, moon, ascendant, mercury, venus, mars, jupiter, saturn, uranus, neptune, pluto 
                                    FROM sign 
                                    WHERE ".$crit);
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

    public function update($request)
    {
        $params = $request->get_params();
        $db = new DatabaseConnector("localhost", "astroconnexion", "mysql", "", "root", "");
        $conn = $db->getConnection();
        foreach ($params as $key => $value) {
            $result = $conn->query("UPDATE sign SET " . $key . " =  '" . $value . "' WHERE email = '" . $params["email"] . "'");
        }
        return $result;
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