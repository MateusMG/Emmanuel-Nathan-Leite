<?php
/////////////////////////////////////////////////////////
	// Point to where you downloaded the phar
	include('httpful.phar');

	//if (!empty($_POST['password'])
	$url = "http://localhost:83/Astroconnexion/user/?firstName={$_POST['firstName']}&lastName={$_POST['lastName']}&birthdate={$_POST['birthdate']}&birthplace={$_POST['birthplace']}&birthtime={$_POST['birthtime']}&email={$_POST['email']}&password={$_POST['password']}";
	
	$response = \Httpful\Request::post($url)->send();
	
	header('Location: http://localhost:83/test/site/profile.php');
	//else{
		//echo "There are empty values!";
	//}

	//var_dump($response);
	//die();