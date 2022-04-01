<?php

if (!empty($_POST['mail']) && !empty($_POST['passwd'])) {

    require_once 'configurationBDO.php';

    $conn = connectDB();
    try {
        $mail = $_POST["mail"];
        $passwd = $_POST["passwd"];

        // sql 
        $sql = "select * from user where mail=:mail";
    
        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':mail', $mail, PDO::PARAM_STR, 50);
        
        $stmt->execute();

        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($rs)) {
            $hashed_password = $rs[0]['passwd'];

            if(password_verify($passwd, $hashed_password)){
                session_start();
                $_SESSION['mail'] = $mail;
                echo 0;
            } else {
                // TODO : Afficher mauvais mdp
                echo "Connexion échouée ! (mauvais mdp)";
            }
        } else {
            echo "Connexion échouée ! (mauvais mail)";
        }
        
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

} else {
    var_dump($_POST);
    // header("Location: home");
}

?>