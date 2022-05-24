<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.expo.inc.php";
include_once "$racine/modele/bd.prix.inc.php";
// recuperation des donnees GET, POST, et SESSION
;


$nbPlace=0;
if (isset($_POST['nbenfant']) && isset($_POST['nbadulte'])){
    $nbPlace = $_POST['nbenfant']+ $_POST['nbadulte'];
}

//récupérer l'expo d'ID maximum expo1 expo2 expo3 expo4 boucle for


$prix=0;
$maxID=getIdExpoMax();
for ($i = $maxID; $i>0;$i--){
    if (isset($_POST['expo'.$i]))
    {
        $prixEnfant = getPrixEnfant($i);
        $nbEnfant = $_POST['nbenfant'];
        $prixAdulte = getPrixAdulte($i);
        $nbAdulte = $_POST ['nbadulte'];




        $prix = ($prixEnfant * $nbEnfant) + ($prixAdulte * $nbAdulte);

    }

}





// appel des fonctions permettant de recuperer les donnees utiles a l'affichage
$listeExpos= getExpos();

include "$racine/vue/entete.html.php";
include "$racine/vue/vueEntr.php";
include "$racine/vue/pied.html.php";

