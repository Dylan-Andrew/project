<!DOCTYPE html>
<html>
<head>
	<title>Liste des étudiants</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
	<header>
		<a class="mn" href="Accueil.html">Accueil</a>
		<a class="mn" href="page.php">Insertion</a>
		<a class="mn" href="modif.php">Modification</a>		
	</header>
	<center>
	<div class="aff">
		<h1>Les étudiants</h1>

		<?php
		
		//connexion a la bdd
		$bdd = new PDO('mysql:host=localhost;dbname=gestion_etudiant;charset=utf8', 'root', '');

		//preparation de la requete
		$reponse = $bdd->query('SELECT * FROM etudiant');
		?>

		<table border="1">
			<tr> 
				<th>id</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Groupe</th>
				<th>Niveau</th>
			</tr>

	    <?php
		while ($donnees = $reponse->fetch())
		{
		?>
		

			<tr>
				<td><?php echo $donnees['id_etudiant']; ?></td>
				<td><?php echo $donnees['nom_etudiant']; ?></td>
				<td><?php echo $donnees['prenom_etudiant']; ?></td>
				<td><?php echo $donnees['groupe_etudiant']; ?></td>
				<td><?php echo $donnees['niveau_etudiant']; ?></td>
			</tr>

			
		
		<?php
		}

		$reponse->closeCursor(); // Termine le traitement de la requête

		?>
		</table>
	</div>

	<div class="supp">
		<h3>Suppression</h3>
		<p>Pour supprimer, sélectionner un id</p>
		<?php
			$choix = $bdd->query('SELECT id_etudiant FROM etudiant');
		?>

		<form action="suppret.php" method="post">
			<select name="supprimer" id="suppr">
				<option value="">Choisir un id</option>

		    <?php
			while ($donneeschoix = $choix->fetch())
			{
			?>
				
				<option value="<?php echo $donneeschoix['id_etudiant']; ?>"><?php echo $donneeschoix['id_etudiant']; ?></option>

			<?php
			}

			$choix->closeCursor(); // Termine le traitement de la requête

			?>
			</select>
			<input type="submit" name="submit" value="Supprimer" />
		</form>
	</div>
	</center>		
	
</body>
</html>