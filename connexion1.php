
<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="page.css" type="text/css" media="screen" />
     </head>

     <body>
<a href="new.php"> Inscription </a> 

<?php?>
<form method="POST" action="connecter1.php" autocomplete="off" > 

	Adresse e-mail <INPUT required type="text" name="mail" />
	<br>
	Mot de passe <INPUT type="password" name="mdp"/>
	<br>
	<input type="submit" value="connexion" name="connexion">
</form>

</body>

</html>
