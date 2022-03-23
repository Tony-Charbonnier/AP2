<?php

$titre = "Bienvenue";
include "./VUE/VueHead.php";
include "./VUE/VueParis.php";
// on affiche basiquement tout ce que contient notre table match2, on a rajouté une ancre au niveau du nom des 2 equipes cela a pour effets de nous rediriger vers notre page de pari/conseil 
 for ($i=1; $i <11 ; $i++) {    ?>
		<div class="P2"> Match de : 
	<?php	$reponse = $db->query('SELECT ligue FROM match2 WHERE ID_match="'.$i.'" ');
						while ($donnees = $reponse->fetch()){echo $donnees['ligue'];}$reponse->closeCursor(); 
					 
						?> </br></br>

	<?php echo "<a class='P2' href='./?action=conseil&ID_match=" . $i . "'>" ?> <?php	$reponse = $db->query('SELECT nom_equipe1, nom_equipe2 FROM match2 WHERE ID_match="'.$i.'"');
						while ($donnees = $reponse->fetch()){echo $donnees['nom_equipe1'];echo " - "; echo $donnees['nom_equipe2'];}$reponse->closeCursor();?></a>
	<div class="P21">
	<div class="P2a"><?php	$reponse = $db->query('SELECT E1 FROM cote WHERE ID_match="'.$i.'"');
						while ($donnees = $reponse->fetch()){echo $donnees['E1'];}$reponse->closeCursor();?></div> /

	<div class="P2a"><?php	$reponse = $db->query('SELECT nul FROM cote WHERE ID_match="'.$i.'" ');
						while ($donnees = $reponse->fetch()){echo $donnees['nul'];}$reponse->closeCursor();?></div> /

	<div class="P2a"><?php	$reponse = $db->query('SELECT E2 FROM cote WHERE ID_match="'.$i.'"');
						while ($donnees = $reponse->fetch()){echo $donnees['E2'];}$reponse->closeCursor();?></div></div></br>_</div></br></br>
	<?php } ?>



