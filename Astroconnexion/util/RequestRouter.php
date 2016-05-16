<?php

include_once "control/ControlManager.php";
include_once "database/DatabaseConnector.php";

class RequestRouter
{
	
	public function route()
	{
     	return (new ControlManager)->getResource();		
	}
}