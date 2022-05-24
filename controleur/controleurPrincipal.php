<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "expo.php";
    $lesActions["visite"] = "expo.php";



    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}

?>