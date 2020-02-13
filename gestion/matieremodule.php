<!DOCTYPE html>
<html>
<head>
	<title>Matières et Modules</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
	
	<header>
		<a class="mn" href="Accueil.html">Accueil</a>	
		<a class="mn" href="page.php">Insertion</a>		
	</header>
	<center>
	<h1>Les matières</h1>

	<?php
	
	//connexion a la bdd
	$bdd = new PDO('mysql:host=localhost;dbname=gestion_etudiant;charset=utf8', 'root', '');

	//preparation de la requete
	$mat = $bdd->query('SELECT * FROM matiere');
	?>

	<table border="1">
		<tr> 
			<th>id</th>
			<th>Nom</th>
		</tr>

    <?php
	while ($donneesmat = $mat->fetch())
	{
	?>
	

		<tr>
			<td><?php echo $donneesmat['id_matiere']; ?></td>
			<td><?php echo $donneesmat['nom_matiere']; ?></td>
		</tr>

		
	
	<?php
	}

	$mat->closeCursor(); // Termine le traitement de la requête

	?>
	</table>

	<?php
	$mod = $bdd->query('SELECT * FROM module');
	?>

	<h1>Les modules</h1>
	<table border="1">
		<tr> 
			<th>id</th>
			<th>Nom</th>
		</tr>

    <?php
	while ($donneesmod = $mod->fetch())
	{
	?>
	

		<tr>
			<td><?php echo $donneesmod['id_module']; ?></td>
			<td><?php echo $donneesmod['nom_module']; ?></td>
		</tr>

		
	
	<?php
	}

	$mod->closeCursor(); // Termine le traitement de la requête

	?>
	</table>
	</center>
</body>
</html>