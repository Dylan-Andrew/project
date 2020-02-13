<html>
	<head>
		<meta charset="utf-8">
		<title>Bienvenue</title>
		<link rel="stylesheet" type="text/css" href="inscription.css">

	</head>

	<body>

		<header>
			<h1>Bienvenue</h1>
		</header>

		<div id="content">
			<div class="inscription">
				<h2>Inscription</h2>
				<form action="index.php" method="post" id="inscription">
					<p><b>Nom d'utilisateur</b></p>
					<input type="text" name="inom" id="inom" placeholder="Nom d'utilisateur" required><br/><br/>
					<p><b>Mot de passe</b></p>
					<input type="password" name="imdp" id="imdp" placeholder="Mot de passe" required><br/><br/>
					<p><b>Confirmer votre mot de passe</b></p>
					<input type="password" name="mdp_conf" id="mdp_conf" placeholder="Mot de passe" required><br/><br/></br>
					<input type="submit" name="send" id="send" value="Valider">
				</form>
			</div>

			<?php
	             if(isset($_POST['send'])){
	                extract($_POST);
	            
	                if(!empty($imdp) && !empty($mdp_conf) && !empty($inom)){
	                	if ($imdp == $mdp_conf){
	                    	$options = [
	                    		'cost'=> 12,
	                    	];

	                   
	                    	include 'include/database.php';
	                    	global $db;

	                    	$hashpass = password_hash($imdp, PASSWORD_BCRYPT, $options);
	                    	
	                    	$c = $db->prepare("SELECT nom_user FROM user WHERE nom_user = :nom_user");
	                    	$c->execute(array('nom_user'=> $inom));

	                    	$result = $c->rowCount();
	                    	if  ($result == 0){
	                    		$q = $db->prepare("INSERT INTO user(nom_user,mdp_user) VALUES (:nom_user, :mdp_user)");
		                    	$q->execute(array(
		                    		':nom_user' => $inom ,
		                    		':mdp_user' => $hashpass));
		                    	echo "Le compte a été créé";
	                    	}else{
	                    		echo "Ce nom d'utilisateur existe déjà!";
	                    	}	

		               }

		               }else{
		                   echo "Les champs ne sont pas tous remplies";
	                   }
	             }
	         ?>
	   
			<div class="connexion">
				<h2>Connexion</h2>
				<form action="index.php" method="post" id="connexion">
					<p><b>Nom d utilisateur</b></p>
					<input type="text" name="cnom" id="cnom" placeholder="Nom d'utilisateur" required><br/><br/>
					<p><b>Mot de passe</b></p>
					<input type="password" name="cmdp" id="cmdp" placeholder="Mot de passe" required><br/><br/></br>
					<a href= "Accueil.html" target="_self" > <input type= "button" value="Se connecter" id="ok"></a>
				</form>
					
				
				<?php
						if (isset($_POST['cnom']) AND isset($_POST['cmdp']))
			            	{	
			            		extract($_POST);
				                if (!empty($_POST['cnom']) AND !empty($_POST['cmdp']))
				                {
				                	include 'include/database.php';
		                			global $db;

				                    $pseudo = $_POST['cnom'];
				                    $req = $db->prepare('SELECT * FROM user WHERE nom_user = :nom_user');
				                    $req-> execute(array(
				                        'nom_user' => $cnom));
				 
				                    $resultat = $req->fetch();
				 
				                     
				                    if ($resultat == true)
				                    {	
				                    	$options = [
	                    					'cost'=> 12,
	                    				];

										$hash = password_hash($cmdp, PASSWORD_BCRYPT, $options);
	
				                    	if (password_verify($hash, $resultat['mdp_user'])){
				                        	echo 'Vous êtes connecté !';
				                        }
				                        else{
				                        	echo "erreur";
				                        }
				                    }
				                    else
				                    {
				                    	echo 'Identifiant ou Mot De Passe incorrect.';
				                    }
				                    $req->closeCursor();

	                		
			                	}else{
			                    	echo "Les champs ne sont pas tous remplies";
			                	}
			                }	
	                
				?>
				
			</div>
		</div>
		
	</body>
</html>		

