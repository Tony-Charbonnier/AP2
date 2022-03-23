<?php
include "getRacine.php";
include "$racine/CONTROLEUR/controleurPrincipal.php";


if (isset($_GET["action"])) {
    $action = $_GET["action"];
} 
else {
    $action = "defaut";
}

$fichier = controleurPrincipal($action);
include "$racine/CONTROLEUR/$fichier";
?>