<?php session_start(); 

?>


<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="style/pagesdeux.css" type="text/css" media="screen" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <div class="projet">
            <img class="imgpres" src="images/f1deux.jpg">
            <p id="titre">Formule 1</p>
            
            <ul>
                <li id="co"><a href="identifification/connexion1.php">Se connecter</a></li>
                <li><a href="identifification/enregistrement1.php">Créer un compte</a></li>
            </ul>
        </div>
        
        <p id="presentation">Bienvenue sur notre site, ici vous aurez librement accès à des renseignements sur la formule 1 et en créant un compte vous aurez la possibilité de participer à un quizz sur ce même thème</p>
        
        <p id="exemple">Exemple de données sur les pilotes:</p>

        <table>
             <tr>
			     <th>Prénom</th>
			     <th>Nom</th>
			     <th>Date de naissance</th>
			     <th>Nationalité</th>
		      </tr>
            
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet_Formule1;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Pilote LIMIT 10');
                
                $ligne = $rep->fetch();
            
                while ($ligne = $rep ->fetch() ) { 
		          echo "<tr>";
		          echo "<td>".$ligne["PrenomPilote"]."</td>";
		          echo "<td>".$ligne["NomPilote"]."</td>";
		          echo "<td>".$ligne["NaissancePilote"]."</td>";
		          echo "<td>".$ligne["NationalitéPilote"]."</td>";
                  echo "</tr>";
		          }
		
                $rep ->closeCursor();
                ?>
            
        </table>
        
        <a class="bt" href="stat/indexstat.php"> Plus de données </a>

 	</body>
 </html> 
