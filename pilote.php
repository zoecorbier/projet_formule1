<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="page.css" type="text/css" media="screen" />
        <title>Pilote</title>
        
    </head>
    

    <body>
         <div class="projet">
           <img class="imgpres" height='100' width='100'src="image.png">
            <p id="titre">Formule 1</p>
            
            <ul>
                <li id="co"><a href="../projet/connexion1.php">Se connecter</a></li>
                <li><a href="../projet/new.php">Créer un compte</a></li>
                <li><a href="index.php">Accueil</a></li>
            </ul>
        </div>
        
        
        <h1>Données sur les pilotes</h1>
         
     
        <table>
             <tr>
			     <th>Prénom</th>
			     <th>Nom</th>
			     <th>Date de naissance</th>
			     <th>Nationalité</th>
		      </tr>
            
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Pilote');
                
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
          
    </body>
    
</html>
