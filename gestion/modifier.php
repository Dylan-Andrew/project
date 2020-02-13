<?php
$bdd = new PDO('mysql:host=localhost;dbname=gestion_etudiant;charset=utf8', 'root', '');
	$mod = $bdd->prepare("UPDATE etudiant SET nom_etudiant = :nom, prenom_etudiant = :prenom, groupe_etudiant= :groupe, niveau_etudiant = :niveau WHERE id_etudiant = :id ");
	$mod->bindValue(':id', $_POST['id'], PDO::PARAM_STR);
	$mod->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
	$mod->bindValue(':prenom', $_POST['prénom'], PDO::PARAM_STR);
	$mod->bindValue(':groupe', $_POST['groupe'], PDO::PARAM_STR);
	$mod->bindValue(':niveau', $_POST['niveau'], PDO::PARAM_STR);
	$modIsOk = $mod->execute();
	if ($modIsOk) 
	{
		$message = 'Modification terminée';
	}
	else
	{
		$message = 'Echec de la modification';
	}
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Modifier</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<header>
		<a class="mn" href="Accueil.html">Accueil</a>
		<a class="mn" href="page.php">Insertion</a>
		
	</header>
	<h1>
		<?php
			echo $message;
		?>
	</h1>
	<a class="mn" href="etudiants.php">Retour</a>	
</body>
</html>
