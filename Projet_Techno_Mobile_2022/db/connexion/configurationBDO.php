<?php
	function connectDB($bdname = "projet_tm_db", $host = "localhost", $user = "root", $pass = ""){ // valeurs par défaut
		try {
			$bdd = new PDO('mysql:host=' . $host .';dbname=' . $bdname . ';charset=utf8', $user, $pass);
		} 
		catch(Exception $e){
			die('Erreur : '.$e->getMessage());
		}
		return $bdd;
	}
?>