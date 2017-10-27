<?php
    $serveur = "localhost";
    $base = 'DCDL';
    $utilisateur = 'root';
    $motDePasse = 'root';
    try{
        $dns = "mysql:host=$serveur;dbname=$base";
        $conn = new PDO( $dns, $utilisateur, $motDePasse ); //Connexion a la BDD
    } catch(Exception $e) {
        echo "Connexion MySQL impossile : ", $e->getMessage();
        die();
    }
?>