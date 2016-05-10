<?php

	$dbhost   = "localhost";
	$dbname   = "tpiproject";
	$dbuser   = "root";
	$dbpass   = "";

	//pdo connection.
	$conn	= new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
	//mysqli connection.
	//$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

?>