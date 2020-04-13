<! DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8"/>
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
		      $_GET['erreur']="";}
        ?>
	<h1> Fiche d'inscription </h1>
    <form method="get" action="enregistrement1.php" autocomplete="off"> 
	   Nom de famille <INPUT required type="text" name="nom" value= <?php echo $_GET['n'];?> />
        <br>
	   Prenom <INPUT required type="text" name="prenom" value=<?php echo $_GET['p'];?>/>
        <br>
	   Date de naissance (AAAA-MM-JJ)<INPUT required type="date" name="anniversaire" value=
	   <?php echo $_GET['anniversaire'];?>/>
        <br>
	   Adresse <INPUT type="text" name="adr" value=<?php echo $_GET['adr'];?>/>
        <br>
	   Code postal <INPUT type="number" name="cp" value=<?php echo $_GET['cp'];?>/>
        <br>
	   Ville <INPUT type="text" name="ville" value=<?php echo $_GET['ville'];?>/>
        <br>
	   Pays <INPUT type="text" name="pays" value=<?php echo $_GET['pays'];?>/>
        <br>
	   Numéro de téléphone <INPUT required type="number" name="num" value=<?php echo $_GET['num'];?>/>
        <br>
	   Adresse électronique <INPUT required type="email" name="mail" value=<?php echo $_GET['mail'];?>/>
	   <?php if($_GET['erreur']=='mail') echo "<br><span style='color : red'> ⛔ Ce mail existe déjà , utilisez un autre </span>";?>
	   Mot de passe <INPUT required type="password" name="mdp1" value=""/>
        <br>
	   Confirmer votre mot de passe <INPUT required type="password" name="mdp2" value="">
	   <?php if($_GET['erreur']=='mdp') echo "<br><span style='color : red'> ⛔ Les 2 mots de passe ne correspondent pas</span>";?>
        <br>
        <INPUT type="submit" value="S'inscrire" name="sinscrire">

    </form>

</body>
</html>
