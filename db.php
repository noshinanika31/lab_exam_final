<?php

	$server = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "company";

 function getConnection(){

 	$conn = mysqli_connect($GLOBALS['server'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['dbname']);

 	return $conn;
 }

?>