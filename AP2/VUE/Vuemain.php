<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="shortcut icon"href="./img/image2"/>
	<title>Acceuil</title>
</head>
<body>
	<?php include './MODELE/database.php'; global $db; ?>

	<h1>bienvenue sur Vite mon match </br>
		<?php	$reponse = $db->query('SELECT Nom, Prenom FROM client');
						while ($donnees = $reponse->fetch()){echo $donnees['Nom'];echo "     ,     ";echo $donnees['Prenom'];}$reponse->closeCursor();?> 	</h1>
	

	
		<div class="A">
			<div class="P1"><a class="P1" href="./?action=paris">Paris</a></div> 
			<div class="M1"><a class="M1" href="./?action=match">Match</a></div>
		</div>	
<div class="C1"><a class="C1" href="./?action=compte">Mon compte</a></div>

</body>
</html>