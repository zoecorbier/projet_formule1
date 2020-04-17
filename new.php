<! DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8"/>
	 <link rel="stylesheet" href="style1.css" type="text/css" media="screen" />
	<title> Inscription </title> 
</head>

<body>
<?php
	if(!isset($_GET['n'])){
		$_GET['n']="";
		$_GET['p']="";
		$_GET['adr']="";
		$_GET['anniversaire']="";
		$_GET['cp']="";
		$_GET['ville']="";
		$_GET['pays']="";
		$_GET['num']="";
		$_GET['mail']="";
		$_GET['erreur']="";
	}
?>
	<h1> Fiche d'inscription </h1>
<form method="get" action="enregistrement1.php" autocomplete="off"> 
<p>
	Nom de famille : <BR> <INPUT required type="text" name="n" value= <?php echo $_GET['n'];?> >
</p>
<p>
	Prenom : <BR><INPUT required type="text" name="p" value=<?php echo $_GET['p'];?>>
</p>
<p>
	Date de naissance (AAAA-MM-JJ) : <BR><INPUT required type="date" name="anniversaire" value=
	<?php echo $_GET['anniversaire'];?>>
</p>
<p>
	Adresse : <BR> <INPUT required type="text" name="adr" value=<?php echo $_GET['adr'];?>>
</p>
<p>
	Code postal : <BR> <INPUT required type="number" name="cp" value=<?php echo $_GET['cp'];?>>
</p>
<p>
	Ville : <BR> <INPUT required type="text" name="ville" value=<?php echo $_GET['ville'];?>>
</p>
<p>
	Pays : <BR> <INPUT required type="text" name="pays" value=<?php echo $_GET['pays'];?>>
</p>
<p>
	Numéro de téléphone : <BR> <INPUT required type="number" name="num" value=<?php echo $_GET['num'];?>>
</p>
<p>
	Adresse électronique : <BR> <INPUT required type="email" name="mail" value=<?php echo $_GET['mail'];?>>
	<?php if($_GET['erreur']=='mail') echo "<br><span style='color : red'> ⛔ Ce mail existe déjà , utilisez un autre </span>";?>

</p>
<p>
	Mot de passe : <BR> <INPUT required type="password" name="mdp1" value="">
</p>
<p>
	Confirmer votre mot de passe : <BR> <INPUT required type="password" name="mdp2" value="">
	<?php if($_GET['erreur']=='mdp') echo "<br><span style='color : red'> ⛔ Les 2 mots de passe ne correspondent pas</span>";?>

</p>
<p>
	 <INPUT type="submit" value="S'inscrire" name="sinscrire">
</p>
</form>

</body>
</html>