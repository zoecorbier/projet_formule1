<!DOCTYPE html>

<html>
    <head>
	<link rel="stylesheet" href="../style/pages.css" type="text/css" media="screen"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
     </head>

     <body>
         
    
        <div id="menu" class="projet">
            <img class="imgpres" src="../images/f1.jpg">
            <p id="titre">Formule 1</p>
            
            <ul>
                <li id="co"><a href="../identifification/enregistrement1.php">Créer un compte</a></li>
                <li><a href="../index.php">Acceuil</a></li>
            </ul>
        </div>

        
         <form method="POST" action="connecter1.php" autocomplete="off" > 
             <INPUT required type="text" name="mail" placeholder="Adresse e-mail"/>
             <br>
             <INPUT type="password" name="mdp" placeholder="Mot de passe"/>
             <br>
             <input class="bt" type="submit" value="Connexion" name="connexion">
         </form>
       
</body>

</html>
