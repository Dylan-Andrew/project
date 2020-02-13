<!DOCTYPE html>
<html>
<head>
	<title>supprimer</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
	<header>
		<a class="mn" href="Accueil.html">Accueil</a>
		<a class="mn" href="profs.php">Voir la liste des étudiants</a>	
	</header>
	<?php
	
	//connexion a la bdd
	$bdd = new PDO('mysql:host=localhost;dbname=gestion_etudiant;charset=utf8', 'root', '');
	$supprim = $bdd->prepare("DELETE FROM apprendre WHERE id_etudiant = :id ");
	$supprim->bindValue(':id', $_POST['supprimer'], PDO::PARAM_STR);
	$supprimtIsOk = $supprim->execute();
	$suppr = $bdd->prepare("DELETE FROM etudiant WHERE id_etudiant = :id ");
	$suppr->bindValue(':id', $_POST['supprimer'], PDO::PARAM_STR);
	$supprtIsOk = $suppr->execute();

	if ($supprtIsOk and $supprimtIsOk) 
	{
		$message = 'Suppression terminée';
	}
	else
	{
		$message = 'Echec de la suppression';
	}
	?>

	<h1>
		<?php
			echo $message;
		?>
	</h1>
	<a class="mn" href="page.php">Retour</a>
</body>
</html>