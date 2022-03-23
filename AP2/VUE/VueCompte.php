<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="shortcut icon"href="css/img/image2"/>
	<title>Mon compte</title>
</head>
<body>
	<?php include './MODELE/database.php'; global $db; ?>

	<div class="P2"> Liste de paris placés  : </br></br>    <!-- dans cette page on affiche les pari placer en croisant les tables pari et match2. Ensuite grâce a la boucle While on affiche tout ce qu'il y a dans notre table pari -->
	<?php	$reponse = $db->query('SELECT p.ID_cote,cote,mise,j.ID_match,nom_equipe1,nom_equipe2,date 
								   FROM pari p
								   INNER JOIN match2 j       
								   ON j.ID_match=p.ID_cote
								  ');
									while ($donnees = $reponse->fetch()){echo $donnees['nom_equipe1'];echo'/';echo $donnees['nom_equipe2'];echo' : ';echo $donnees['date'];echo'<br>'; echo 'votre pari : ';echo $donnees['mise']; echo '€, sur : ' ; echo $donnees['cote']; echo '<br>'; }$reponse->closeCursor();?> </br></br>


									mise totale : <?php $reponse = $db->query('SELECT SUM(mise) AS mise_totale FROM pari ');
						while ($donnees = $reponse->fetch()){echo $donnees['mise_totale'];}$reponse->closeCursor();?>€ </br>
						nombre  total de paris : <?php $reponse = $db->query('SELECT count(ID_pari) AS nb_pari FROM pari ');
						while ($donnees = $reponse->fetch()){echo $donnees['nb_pari'];}$reponse->closeCursor();?>
						 </div>


</body>
</html>