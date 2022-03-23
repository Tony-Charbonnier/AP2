<?php

$titre = "Bienvenue";
include "$racine/vue/VueHead.php";
include "$racine/vue/Vueconseil.php";


  ?>
	
	
	
	 	
	<h1> <?php	$reponse = $db->query('SELECT date FROM match2 WHERE ID_match=\''. $_GET['ID_match'] . '\'');
						while ($donnees = $reponse->fetch()){echo $donnees['date'];}$reponse->closeCursor();?> </br>

		<?php $reponse = $db->query('SELECT nom_equipe1, nom_equipe2 FROM match2 WHERE ID_match=\''. $_GET['ID_match'] . '\'');
						while ($donnees = $reponse->fetch()){echo $donnees['nom_equipe1'];echo'  -  ';echo $donnees['nom_equipe2'];}$reponse->closeCursor(); ?> </h1>

		<div class="P2"><?php	$reponse = $db->query('SELECT commentaire FROM match2 WHERE ID_match=\''. $_GET['ID_match'] . '\'');
									while ($donnees = $reponse->fetch()){echo $donnees['commentaire'];}$reponse->closeCursor();?></div>

				<form method="post">
					<div class="d2">
						<div class="ba">   <?php	$reponse = $db->query('SELECT E1 FROM cote WHERE ID_match=\''. $_GET['ID_match'] . '\'');
						while ($donnees = $reponse->fetch()){echo $donnees['E1'];}$reponse->closeCursor();?></div>
							<input class="b1" type="radio" name="cote"value="l'équipe 1" checked="">
					

						<div class="ba">  <?php	$reponse = $db->query('SELECT nul FROM cote WHERE ID_match=\''. $_GET['ID_match'] . '\'');
						while ($donnees = $reponse->fetch()){echo $donnees['nul'];}$reponse->closeCursor();?> </div>
						<input class="b1" type="radio" name="cote"value="match null" >
					

						<div class="ba">  <?php	$reponse = $db->query('SELECT E2 FROM cote WHERE ID_match=\''. $_GET['ID_match'] . '\'');
						while ($donnees = $reponse->fetch()){echo $donnees['E2'];}$reponse->closeCursor();?></div>
						<input class="b1" type="radio" name="cote"value="l'équipe 2">

						<input class="b2" type="number" name="mise" placeholder="Mise">


						<div class="b1"> <input type="submit" value="Parier" name="Parier"></div>	</div>

					</form>

<?php if(isset($_POST['Parier'])){

   extract($_POST);

	 $q = $db->prepare("INSERT INTO pari(ID_cote,cote,mise) VALUES(:ID_match,:cote,:mise)");
     $q->execute([
     	'ID_match'=>$_GET['ID_match'],
     	'cote'=>$_POST['cote'],
     	'mise'=>$_POST['mise']
     ]);}  ?>




