<?php

$titre = "Match à venir";
include "$racine/VUE/VueHead.php";
include "$racine/VUE/VueMatch.php";
// ici on affiche simplement tous nos matchs de notre table match2 sans mettre les commantaires cette fois-ci 
$reponse = $db->query('SELECT nom_equipe1, nom_equipe2, date  FROM match2 ');
						while ($donnees = $reponse->fetch()){echo $donnees['nom_equipe1'];echo'/';echo $donnees['nom_equipe2'];echo'le : ';echo $donnees['date'];echo '<br>';echo '<br>';}$reponse->closeCursor();?> </br></br></div>



