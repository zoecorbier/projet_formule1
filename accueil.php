<?php session_start(); 

?>


<!DOCTYPE html>
 <html>
 	<head>
 	<link rel="stylesheet" href="../projet/page.css"
 type="text/css" media="screen" />
 		<title> Acceuil </title>
 	</head>
 	<body>
 		<br><h2> FORMULE 1 </h2></br>

 		<div id="cadre-quizz">
 		<center>
 		<p id="Quizz"> <br> Renseignements </p></br>
 		</center>
 		<center>
 		<a href="http://google.fr"> <img src="loupe.png"></a>
 		</center>
 		</div>

<?php if(!isset($_SESSION['utilisateur'])){ ?>
 		<div id="cadre-renseignements">

 		<center>
 		<p id="Rens"><br> <a href="../projet/connexion1.php">
            Se connecter </a> </p></br>
 		</center>

 		<center>
 		<a href="http://google.fr"> <img src="ordinateur.png"></a>
 		</center>
 		</div>

 		<div id="cadre-lives">
 		<center>
 		<p id="fin"><br><a href="../projet/new.php">
            Inscription </a></p></br>
 		</center>
 		<center>
 		<a href="http://google.fr"> <img src="bonhomme.png"></a>
 		</center>
 		</div>

  <?php } else {
  	echo "Bonjour "." ".$_SESSION['utilisateur']['PrenomUtilisateur']." ".$_SESSION['utilisateur']['NomUtilisateur'];

  	echo "<br><br><br><a href='deconnexion1.php'> Se deconnecter </a>";

  }

  	?>



 	</body>
 </html>  