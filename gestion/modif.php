<!DOCTYPE html>
<html>
<head>
	<title>Modifier</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<header>
		<a class="mn" href="Accueil.html">Accueil</a>
		<a class="mn" href="page.php">Insertion</a>	
	</header>

	<div class="etudiant">
				<h2> Modification Etudiant</h2>
				<form action="modifier.php" method="post" id="etudiant">

					<input type="text" name="id" id="id" placeholder="id" required><br/><br/>
					<input type="text" name="nom" id="nom" placeholder="nom" required><br/><br/>
					<input type="text" name="prénom" id="prénom" placeholder="prénom" required><br/><br/>
					<input type="text" name="groupe" id="groupe" placeholder="groupe" required><br/><br/>
					<input type="text" name="niveau" id="niveau" placeholder="niveau" required><br/><br/>
					<input type="submit" name="entrer" id="entrer" value="Modifier" required>
				</form>
	</div>
	<a class="mn" href="etudiants.php">Retour</a>
</body>
</html>