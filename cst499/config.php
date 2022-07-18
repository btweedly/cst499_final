<?php

try{
	$connString = "mysql:host=localhost;dbname=cst499";
	$user = "admin";
	$pass = "12345";

	$pdo = new PDO($connString,$user,$pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
	die( $e->getMessage() );
}

?>