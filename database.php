<?php
//Create connection credentials
$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'root';
$dp_pass = '';

//Create the mysqli object
$mysqli = new mysqli($db_host,$db_user,$dp_pass,$db_name);



//Error Handler
if($mysqli->connect_error){
	printf("Connection Failed: %s\n",$mysqli->connect_error);
	exit();	
}


?>



