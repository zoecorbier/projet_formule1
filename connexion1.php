
<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="style1.css" type="text/css" media="screen" />
     <script>
     function clic(){
     	alert("Vous pouvez désormais participer au quizz");
     }
  </script>

     </head>

     <body>
<h1> Inscription</h1>

<?php?>
<form method="POST" action="connecter1.php" autocomplete="off" > 
	</p> 
	Adresse e-mail : <INPUT required type="text" name="mail" >
	</p>
	<p>
	Mot de passe : <INPUT type="password" name="mdp">
	</p>
<br>
<button id="monBouton"  onclick="clic()">
	Connexion
	</button>
</form>

</body>

</html>