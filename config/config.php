<?php 
    $serveur = "localhost";
    $login = "root";
    $pass = "root";

    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=moduleconnexion", $login, $pass);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $connexion-> prepare(
            "INSERT INTO utilisateurs(login,prenom,nom,password)
            VALUES(:login,:prenom,:nom,:password)"
        );
        
        $requete->bindParam(':login,$login');
        $requete->bindParam(':prenom,$prenom');
        $requete->bindParam(':nom,$nom');
        $requete->bindParam(':password,$password');
    }

    catch (PDOException $e) {
        echo 'Echec de la connexion : ' . $e->getMessage();
    }
?>