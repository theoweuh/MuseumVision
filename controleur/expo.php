<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.expo.inc.php";
// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage
$listeExpos= getExpos();

include "$racine/vue/entete.html.php";
include "$racine/vue/vueEntr.php";
include "$racine/vue/pied.html.php";
?>
