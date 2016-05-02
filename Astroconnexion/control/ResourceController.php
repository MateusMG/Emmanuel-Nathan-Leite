<?php

include_once "model/Request.php";
include_once "control/UserController.php";

class ResourceController
{

	private $controlMap = 
	[
		"user" => "UserController",
		"sign" => "SignController";
		"friendship" => "FriendshipController";
		"chat" => "ChatController";
 	];

	public function createResource($request)
	{
		return new $this->controlMap[$request->get_resource()]());
	}
}