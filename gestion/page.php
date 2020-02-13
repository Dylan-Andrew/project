<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Ajout</title>
		<link rel="stylesheet" type="text/css" href="page.css">

	</head>

	<body>
		
		<header>
			<h1>Ajout</h1>
		</header>

		<div id="content">

			<!-- Etudiant -->

			<div class="etudiant">
				<h2> Ajout Etudiant</h2>
				<form action="insertion.php" method="post" id="etudiant">

					<input type="text" name="id" id="id" placeholder="id" required><br/><br/>
					<input type="text" name="nom" id="nom" placeholder="nom" required><br/><br/>
					<input type="text" name="prénom" id="prénom" placeholder="prénom" required><br/><br/>
					<input type="text" name="groupe" id="groupe" placeholder="groupe" required><br/><br/>
					<input type="text" name="niveau" id="niveau" placeholder="niveau" required><br/><br/>
					<input type="submit" name="entrer" id="entrer" required>
				</form>	

				
			</div>
		

			<!-- Professeur -->

			<div class="professeur">

				<h2> Ajout Professeur</h2>
				<form action="insererprof.php" method="post" id="prof">
					<input type="text" name="id_prof" id="id_prof" placeholder="id" required><br/><br/>
					<input type="text" name="nom_prof" id="nom_prof" placeholder="nom" required><br/><br/>
					<input type="text" name="prénom_prof" id="prénom_prof" placeholder="prénom" required><br/><br/>
					<input type="submit" name="valider" id="valider" required>
				</form>	
				
			</div>
		</div>
		<footer>
			<div class="Accueil">
				<ul class="btn">
					<a href="Accueil.html">Accueil</a>
				</ul>
			</div>
			<div class="ListeEtud">
				<ul class="btn">
				<a href="etudiants.php">Liste des étudiants</a>				
			</div>
			<div class="ListeProf">
				<ul class=btn>
					<a href="profs.php">Liste des professeurs</a>
				</ul>
			</div>
		</footer>
	</body>
</html>

