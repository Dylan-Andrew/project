<!DOCTYPE html>
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
		$bdd_stat = $bdd->prepare('INSERT INTO professeur VALUES (:id, :nom, :prenom)');

		//liaison de chaque marqueur a une valeur
		$bdd_stat->bindValue(':id', $_POST['id_prof'], PDO::PARAM_STR);
		$bdd_stat->bindValue(':nom', $_POST['nom_prof'], PDO::PARAM_STR);
		$bdd_stat->bindValue(':prenom', $_POST['prénom_prof'], PDO::PARAM_STR);

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
	<h1>
		<?php
			echo $message;
		?>
	</h1>
		<a class="mn" href="page.php">Retour</a>
			

</body>
</

 