<?php session_start(); 

?>


<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="page.css" type="text/css" media="screen" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <div class="projet">
            <img height='100' width='100' class="imgpres" src="image.png">
            <p id="titre">Formule 1</p>
         
         <?php if(!isset($_SESSION['utilisateur'])){ ?>   
            <ul>
                <li id="co"><a href="../projet/connexion1.php">Se connecter</a></li>
                <li><a href="../projet/new.php">Créer un compte</a></li>
            </ul>

            <?php } else {



    echo "<ul>
            <li><font color='blue'>Bonjour "." ".$_SESSION['utilisateur']['PrenomUtilisateur']." ".$_SESSION['utilisateur']['NomUtilisateur']."</font></li>
            <li><a href='quizz.php'>Participer au quizz</a></li>
            <li><a href='deconnexion1.php'> Se déconnecter </a></li>
        </ul>
    ";
  }
    ?>

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
                 $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'root');
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
        
        <a class="bt" href="indexstat.php"> Plus de données </a>

 	</body>
 </html> 
