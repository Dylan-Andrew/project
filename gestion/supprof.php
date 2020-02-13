<!DOCTYPE html>
<html>
<head>
	<title>supprimer</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
	<?php
	
	//connexion a la bdd
	$bdd = new PDO('mysql:host=localhost;dbname=gestion_etudiant;charset=utf8', 'root', '');
	$suppr = $bdd->prepare("DELETE FROM professeur WHERE id_prof = :id ");
	$suppr->bindValue(':id', $_POST['supprimer'], PDO::PARAM_STR);
	$supprIsOk = $suppr->execute();

	if ($supprIsOk) 
	{
		$message = 'Suppression terminée';
	}
	else
	{
		$message = 'Echec de la suppression';
	}
	echo $message;
	?>

	<header>
		<a class="mn" href="Accueil.html">Accueil</a>	
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
