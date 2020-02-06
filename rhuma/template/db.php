<?php

// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","greg","greg","rhuma-sug");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		} else {
            echo "co réussi";
        }

// try {
//     $db = new PDO('mysql:host=localhost;dbname=rhuma-sug;charset=utf8', 'greg', 'greg',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//  } catch (Exception $e) {
//      echo 'Connexion impossible:<br>'.$e->getMessage();
//      exit;
// }
?>