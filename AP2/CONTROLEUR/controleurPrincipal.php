<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "main.php";
    $lesActions["main"] = "main.php";
    $lesActions["compte"] = "compte.php";
    $lesActions["paris"] = "Paris.php";
    $lesActions["match"] = "match.php";
    $lesActions["conseil"] = "conseil.php";


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>