<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="page.css" type="text/css" media="screen" />
        <title>Constructeur</title>
        
    </head>
    
   <div class="projet">
            <img class="imgpres" height='100' width='100'src="image.png">
            <p id="titre">Formule 1</p>
            
            <ul>
                <li id="co"><a href="../projet/connexion1.php">Se connecter</a></li>
                <li><a href="../projet/new.php">Créer un compte</a></li>
                <li><a href="index.php">Accueil</a></li>
            </ul>
        </div>
    
    <body>
        <table>
            
            <h1>Données sur les constructeurs</h1>
             <tr>
			     <th>Nom</th>
			     <th>Nationalité</th>
		      </tr>
            
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Constructeur');
                
                $ligne = $rep->fetch();
                while ($ligne = $rep ->fetch()) { 
		          echo "<tr>";
		          
		          echo "<th>".$ligne["NomConstructeur"]."</th>";
		          echo "<th>".$ligne["NationalitéConstructeur"]."</th>";
		          echo "</tr>";
		          }
                $rep ->closeCursor();
                ?>
            
            
        </table>
    </body>
    
</html>
