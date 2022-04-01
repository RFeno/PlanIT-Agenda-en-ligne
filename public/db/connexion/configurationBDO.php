<?php
	function connectDB($bdname = "iw4t7y2l_planit", $host = "localhost", $user = "root", $pass = ""){ // valeurs par défaut
		try {
			$bdd = new PDO('mysql:host=' . $host .';dbname=' . $bdname . ';charset=utf8', $user, $pass);
		} 
		catch(Exception $e){
			die('Erreur : '.$e->getMessage());
		}
		return $bdd;
	}
?>