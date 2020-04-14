<!DOCTYPE html>
<html>

<head>
	<title>Connexion</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="../projet/pagedeux.css" type="text/css" media="screen" />
</head>

<body>
	<div id="menu" class="projet">
            <img class="imgpres" src="../images/f1.jpg">
            <p id="titre">Formule 1</p>
            
            <ul>
                <li id="co"><a href="../identifification/enregistrement1.php">Créer un compte</a></li>
                <li><a href="../index.php">Acceuil</a></li>
            </ul>
        </div><br>

	</br><br>
	<center><h1 class="connexion">Connexion</h1></center>
	<center>
	
	<form method="POST" action="connecter1.php" autocomplete="off" >
	
	<table>
	
 		<br><tr><td>E-mail : </td><td> <input type="text" name="mail" value="" /></td></tr>
 		<tr><td>Mot de passe : </td><td> <input type="password" name="mdp" /></td></tr>
 		<tr><td><input type="submit" value="se connecter"></td><td></td></tr>
	
	</table>

	</form></center>
	
	<p>Si vous n'avez pas de compte, veuillez en créer un : <a href="inscription.php" >Creer un compte</a></p>

</body>
</html> 
