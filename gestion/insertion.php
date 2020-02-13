<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Ajout</title>
		<link rel="stylesheet" type="text/css" href="header.css">

</head>
<body>
	<?php
		
		//connexion a la bdd
		$bdd = new PDO('mysql:host=localhost;dbname=gestion_etudiant;charset=utf8', 'root', '');

		//preparation de la requete
		$bdd_stat = $bdd->prepare('INSERT INTO etudiant VALUES (:id, :nom, :prenom, :groupe, :niveau)');

		//liaison de chaque marqueur a une valeur
		$bdd_stat->bindValue(':id', $_POST['id'], PDO::PARAM_STR);
		$bdd_stat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
		$bdd_stat->bindValue(':prenom', $_POST['prénom'], PDO::PARAM_STR);
		$bdd_stat->bindValue(':groupe', $_POST['groupe'], PDO::PARAM_STR);
		$bdd_stat->bindValue(':niveau', $_POST['niveau'], PDO::PARAM_STR);

		//exection de la requete
		$insertIsOk = $bdd_stat->execute();

		if ($insertIsOk) 
		{
			$message = 'Insertion terminée';
		}
		else
		{
			$message = 'Echec de l\'insertion';
		}

		

	?>

	<header>
		<a class="mn" href="index.html">Accueil</a>	
		<a class="mn" href="etudiants.php">Voir la liste des étudiants</a>	
	</header>
	<h1>
		<?php
			echo $message;
		?>
	</h1>
	<a class="mn" href="page.php">Retour</a>
</body>
</html>
 