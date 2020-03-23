<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Style/table.css" type="text/css" media="screen" />
        <title>Pilote</title>
        
    </head>
    

    <body>
        <div class="projet">
            
            <ul>
                <li><a href="pageacceuil.html" style="text-decoration:none">Accueil</a></li>
                <li><a href="circuit.php" style="text-decoration:none">Données sur les circuits</a></li>
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
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet_Formule1;charset=utf8', 'root', 'root');
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