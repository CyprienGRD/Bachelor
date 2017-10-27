<?php
    $serveur = "localhost"; //172.29.20.213
    $base = 'DCDL'; //nom de la base
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