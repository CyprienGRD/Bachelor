<?php
    /**
     * Created by PhpStorm.
     * User: E20140048
     * Date: 26/10/2017
     * Time: 14:10
     */
    include("authentification.php");

    if(!empty($_GET['lettre'])){
        $lettre = $_GET['lettre']; //Recuperation de la lettre generee
        $sql = $conn->prepare("UPDATE alphabet SET nbUtilisation=nbUtilisation+1 WHERE lettre ='$lettre'"); //preparation de la requete de mise a jour du nbUtilisation
        try {
            $success = $sql->execute($donnees); //Execution de la requete
            if( $success ) {
                echo "Enregistrement réussi";
            }
        } catch( Exception $e ){
            echo 'Erreur de requète : ', $e->getMessage();
        }
    }
?>