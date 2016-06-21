<?php
// Point to where you downloaded the phar
include('httpful.phar');

if(!empty($_GET['email']) && !empty($_GET['password'])){
    session_start();

$response = \Httpful\Request::get("http://localhost:83/Astroconnexion/user/?email=".$_GET['email']."&password=".$_GET['password'])->send();


$request_response = json_decode($response->body);


//$_SESSION["user"] = json_encode($request_response);

//echo "You had logged in";
}