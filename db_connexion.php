<?php
	$nomServeur = "127.0.0.1"; 	
	$nomUtil = "root";		
	$mdpUtil = "";		
	$nomBD = "db_recette";	
	
	try {
		$connexion = new PDO("mysql:host=$nomServeur;dbname=$nomBD;charset=UTF8", $nomUtil, $mdpUtil);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
	}					
?>