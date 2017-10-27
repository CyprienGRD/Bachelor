<?php
    /**
     * Created by PhpStorm.
     * User: E20140048
     * Date: 26/10/2017
     * Time: 14:10
     */
    include("authentification.php");

    if(!empty($_GET['lettre'])){
        $lettre = $_GET['lettre'];
        $sql = $conn->prepare("UPDATE alphabet SET nbUtilisation=nbUtilisation+1 WHERE lettre ='$lettre'");
        try {
            $success = $sql->execute($donnees);
            if( $success ) {
                echo "Enregistrement réussi";
            }
        } catch( Exception $e ){
            echo 'Erreur de requète : ', $e->getMessage();
        }
    }
?>