//Fonction JS
(function(){
    //Generation d'un chiffre
    function aleatoire(min, max) {
        return (Math.floor((max-min)*Math.random())+min); //retourne un chiffre aleatoire
    }
    //Generation d'une voyelle
    var voy = ["a","e","i","o","u","y"];
    function VoyeAlea(){
        return(voy[aleatoire(0,voy.length)]); //retourne une consonne aleatoire entre 0 et 6
    }
    //Generation d'une consonne
    var con = ["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","y","z"];
    function ConsAlea(){
        return(con[aleatoire(0,con.length)]); //retourne une consonne aleatoire entre 0 et 21
    }
    //Ajouter une lettre + incrementer nbUtilisation dans la BDD
    var compteur=1;
    $("button#cons").click(function(){
        var cons= ConsAlea();
        $("#lettre"+compteur).html(cons);
        compteur ++;
        $.ajax({                                     // On execute un ajax
            method: "GET",                           // D'une méthode GET
            url: "lettre.php",                       // Au php lettre.php
            data: { "lettre": cons}
        })
        .done(function( e ) {                       // L'ajax renvoi une réponse
            console.log( "Data Saved: " + e );      // On l'affiche dans le log
        });
    })
    $("button#voye").click(function(){
        var voye= VoyeAlea();
        $("#lettre"+compteur).html(voye);
        compteur++;
        $.ajax({                                     // On execute un ajax
            method: "GET",                           // D'une méthode GET
            url: "lettre.php",                       // Au php lettre.php
            data: { "lettre": voye}
        })
        .done(function( e ) {                       // L'ajax renvoi une réponse
            console.log( "Data Saved: " + e );      // On l'affiche dans le log
        });
    })
})();