<?php
	try {
		$bdd = new PDO('mysql:host = localhost; dbname=Aston_Intra','root','');
	}
	
	catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
?>