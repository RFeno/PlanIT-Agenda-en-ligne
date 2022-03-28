<?php

// Normalement ok

require_once 'configurationBDO.php';

$conn = connectDB();
try {

    $firstname = $_POST["firstname"];
    $passwd = $_POST["passwd"];

    // sql 
    $sql = "Select * from user where nom=:firstname";
  
    // Prepare statement
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR, 50);
    
    $stmt->execute();

    $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $hashed_password = $rs[0]['MDP'] ;

    if(password_verify($passwd, $hashed_password)){
        session_start();
        $_SESSION['firstname'] = $firstname ;
        $_SESSION['statut'] = $rs[0]["GESTION"] ;
        echo $_SESSION['statut'] ;
    }
    else{
        echo -1 ;
    }
    
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
