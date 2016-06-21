<?php
// Point to where you downloaded the phar
include('httpful.phar');


$url = "http://localhost:83/Astroconnexion/user/?firstName=".$_POST['firstName']."&lastName=".$_POST['lastName']."&birthplace=".$_POST['birthplace']."&birthdate=".$_POST['birthdate']."&birthtime=".$_POST['birthtime']."&email=".$_POST['email']."&password=".$_POST['password'];

$response = \Httpful\Request::put($url)->send();

header('location:CadastroRealizado.php');
